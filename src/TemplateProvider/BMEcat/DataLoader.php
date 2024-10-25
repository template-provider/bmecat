<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat;

use TemplateProvider\BMEcat\Exception\UnknownKeyException;
use TemplateProvider\BMEcat\Node\AbstractNode;
use TemplateProvider\BMEcat\Node\Catalog;
use TemplateProvider\BMEcat\Node\Document;
use TemplateProvider\BMEcat\Node\Header;

class DataLoader
{
    /**
     * @throws UnknownKeyException
     */
    public static function load(array $data, DocumentBuilder $builder): void
    {
        if (true === isset($data['loader'])) {
            foreach ($data['loader'] as $nodeName => $class) {
                $builder->getLoader()->set($nodeName, $class);
            }
        }

        if (($document = $builder->getDocument()) === null) {
            $document = $builder->build();
        }

        foreach ($data as $key => $value) {
            switch (strtolower($key)) {
                case 'nullable':
                    if (true === is_bool($value)) {
                        $builder->setSerializeNull($value);
                    }

                    break;

                case 'document':
                    self::loadDocument($value, $document);

                break;

                case 'loader':
                    continue 2;

                default:
                    throw new UnknownKeyException(sprintf('Unknown key %s to load', $key));
            }
        }
    }

    /**
     * @throws UnknownKeyException
     */
    public static function loadDocument(array $data, Document $document): void
    {
        foreach ($data as $key => $value) {
            switch (strtolower($key)) {
                case 'header':
                    if (null !== $document->getHeader()) {
                        self::loadHeader($value, $document->getHeader());
                    }

                    break;

                case 'attributes':
                    self::loadArrayData($value, $document);

                    break;

                default:
                    throw new UnknownKeyException(sprintf('Unknown key document.%s to load', $key));
            }
        }
    }

    /**
     * @throws UnknownKeyException
     */
    public static function loadHeader(array $data, Header $header): void
    {
        foreach ($data as $key => $value) {
            switch (strtolower($key)) {
                case 'generator_info':
                    self::loadScalarData($key, $value, $header);

                    break;

                case 'catalog':
                    if (null !== $header->getCatalog()) {
                        self::loadCatalog($value, $header->getCatalog());
                    }

                    break;

                case 'supplier':
                    if (null !== $header->getSupplier()) {
                        self::loadArrayData($value, $header->getSupplier());
                    }

                    break;

                default:
                    throw new UnknownKeyException(sprintf('Unknown key header.%s to load', $key));
            }
        }
    }

    /**
     * @throws UnknownKeyException
     */
    public static function loadCatalog(array $data, Catalog $catalog): void
    {
        foreach ($data as $key => $value) {
            match (strtolower($key)) {
                'id', 'version', 'language' => self::loadScalarData($key, $value, $catalog),
                'datetime' => self::loadArrayData($value, $catalog->getDateTime()),
                default => throw new UnknownKeyException(sprintf('Unknown key header.%s to load', $key)),
            };
        }
    }

    public static function loadArrayData(array $data, AbstractNode $node): void
    {
        foreach ($data as $key => $value) {
            self::loadScalarData($key, $value, $node);
        }
    }

    public static function loadScalarData(string $key, $value, AbstractNode $node): void
    {
        $method = 'set' . self::formatAttribute($key);
        $node->{$method}($value);
    }

    public static function formatAttribute(string $attribute): string
    {
        return \preg_replace_callback(
            '/(^|_|\.)+(.)/', fn($match): string => ('.' === $match[1] ? '_' : '') . strtoupper($match[2]), $attribute
        );
    }
}
