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
final class MimeTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function test_set_get_type(): void
    {
        $node = new Mime();
        $value = sha1(uniqid(microtime(false), true));

        $node->setType($value);
        self::assertSame($value, $node->getType());
    }

    public function test_set_get_source(): void
    {
        $node = new Mime();
        $value = sha1(uniqid(microtime(false), true));

        self::assertSame('', $node->getSource());
        $node->setSource($value);
        self::assertSame($value, $node->getSource());
    }

    public function test_set_get_purpose(): void
    {
        $node = new Mime();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getPurpose());
        $node->setPurpose($value);
        self::assertSame($value, $node->getPurpose());
    }

    public function test_serialize_with_null_values(): void
    {
        $node = new Mime();
        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_mime_info_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }

    public function test_serialize_without_null_values(): void
    {
        $node = new Mime();
        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_mime_info_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }
}
