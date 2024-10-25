<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class HeaderTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function test_set_get_generator_info(): void
    {
        $node = new Header();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getGeneratorInfo());
        $node->setGeneratorInfo($value);
        self::assertSame($value, $node->getGeneratorInfo());
    }

    public function test_set_get_supplier(): void
    {
        $header = new Header();
        $supplier = new Supplier();

        $header->setSupplier($supplier);
        self::assertSame($supplier, $header->getSupplier());
    }

    public function test_set_get_catalog(): void
    {
        $header = new Header();
        $catalog = new Catalog();

        $header->setCatalog($catalog);
        self::assertSame($catalog, $header->getCatalog());
    }

    public function test_serialize_with_null_values(): void
    {
        $header = new Header();
        $catalog = new Catalog();
        $supplier = new Supplier();

        $header->setCatalog($catalog);
        $header->setSupplier($supplier);

        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_header_with_null_values.xml');
        $actual = $this->serializer->serialize($header, 'xml', $context);

        self::assertSame($expected, $actual);
    }

    public function test_serialize_without_null_values(): void
    {
        $header = new Header();
        $catalog = new Catalog();
        $supplier = new Supplier();

        $header->setCatalog($catalog);
        $header->setSupplier($supplier);

        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_header_without_null_values.xml');
        $actual = $this->serializer->serialize($header, 'xml', $context);

        self::assertSame($expected, $actual);
    }
}
