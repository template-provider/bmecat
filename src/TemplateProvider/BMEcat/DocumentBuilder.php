<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat;

use JMS\Serializer\Expression\ExpressionEvaluator;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\ExpressionLanguage\ExpressionLanguage;
use TemplateProvider\BMEcat\Exception\MissingDocumentException;
use TemplateProvider\BMEcat\Node\NodeInterface;

class DocumentBuilder
{
    protected ?Serializer $serializer;

    protected ?SerializationContext $context;

    protected NodeInterface $document;

    public function __construct(?Serializer $serializer = null, ?SerializationContext $context = null)
    {
        if (null === $serializer) {
            $serializer = SerializerBuilder::create()
                ->setExpressionEvaluator(new ExpressionEvaluator($this->getExpressionLanguage()))
                ->build();
        }

        if (null === $context) {
            $context = SerializationContext::create();
        }

        $this->context    = $context;
        $this->serializer = $serializer;
    }

    public static function create(?Serializer $serializer = null): self
    {
        return new self($serializer);
    }

    public function getSerializer(): Serializer
    {
        return $this->serializer;
    }

    public function getContext(): SerializationContext
    {
        return $this->context;
    }

    public function setDocument(NodeInterface $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function getDocument(): NodeInterface
    {
        return $this->document;
    }

    /**
     * @throws MissingDocumentException
     */
    public function toString(): string
    {
        if (($document = $this->getDocument()) === null) {
            throw new MissingDocumentException('Please call ::setDocument() first.');
        }

        return $this->serializer->serialize($document, 'xml', $this->context);
    }

    private function getExpressionLanguage(): ExpressionLanguage
    {
        $expressionLanguage = new ExpressionLanguage();
        $expressionLanguage->register('empty', function ($str) {
            return $str;
        }, function ($arguments, $str) {
            return empty($str);
        });

        return $expressionLanguage;
    }
}
