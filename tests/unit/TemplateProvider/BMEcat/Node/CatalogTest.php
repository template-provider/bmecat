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
final class CatalogTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function test_set_get_id(): void
    {
        $node = new Catalog();
        $value = sha1(uniqid(microtime(false), true));

        $node->setId($value);
        self::assertSame($value, $node->getId());
    }

    public function test_set_get_version(): void
    {
        $node = new Catalog();
        $value = sha1(uniqid(microtime(false), true));

        $node->setVersion($value);
        self::assertSame($value, $node->getVersion());
    }

    public function test_set_get_language(): void
    {
        $node = new Catalog();
        $value = sha1(uniqid(microtime(false), true));

        $node->setLanguage($value);
        self::assertSame($value, $node->getLanguage());
    }

    public function test_set_get_date_time(): void
    {
        $node = new Catalog();
        $dateTime = new DateTime();

        $node->setDateTime($dateTime);
        self::assertSame($dateTime, $node->getDateTime());
    }

    public function test_serialize_with_null_values(): void
    {
        $node = new Catalog();
        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_catalog_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }

    public function test_serialize_without_null_values(): void
    {
        $node = new Catalog();
        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_catalog_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }
}
