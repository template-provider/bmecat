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
final class SupplierTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function test_set_get_id(): void
    {
        $node = new Supplier();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getId());
        $node->setId($value);
        self::assertSame($value, $node->getId());
    }

    public function test_set_get_name(): void
    {
        $node = new Supplier();
        $value = sha1(uniqid(microtime(false), true));

        $node->setName($value);
        self::assertSame($value, $node->getName());
    }

    public function test_serialize_with_null_values(): void
    {
        $node = new Supplier();
        $node->setName('TestSupplier');

        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_supplier_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }

    public function test_serialize_without_null_values(): void
    {
        $node = new Supplier();
        $node->setName('TestSupplier');

        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_supplier_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }
}
