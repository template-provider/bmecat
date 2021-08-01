<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat;

use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;
use TemplateProvider\BMEcat\Node\Document;

class DataLoaderTest extends TestCase
{
    private DocumentBuilder $builder;

    protected function setUp(): void
    {
        $serializer = SerializerBuilder::create()->build();
        $this->builder    = new DocumentBuilder($serializer);
    }

    public function test_load_from_builder(): void
    {
        $info = sha1(uniqid(microtime(false), true));
        $data = [
            'header' => [
                'generator_info' => $info,
            ],
        ];

        $document = NodeBuilder::fromArray($data, new Document());
        $this->builder->setDocument($document);

        $header = $this->builder->getDocument()->getHeader();
        static::assertSame($info, $header->getGeneratorInfo());
    }

    public function test_can_create_default_document(): void
    {
        $document = NodeBuilder::fromArray([], new Document());
        static::assertInstanceOf(Document::class, $document);
    }

    public function test_converts_attribute_name_to_method_name(): void
    {
        $attribute = 'my_test_attribute';
        $method    = \TemplateProvider\BMEcat\DataLoader::formatAttribute($attribute);

        static::assertSame('MyTestAttribute', $method);
    }
}
