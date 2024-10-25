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
final class DateTimeTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function test_set_get_date(): void
    {
        $node = new DateTime();
        $value = '1979-01-10';

        self::assertSame('', $node->getDate());
        $node->setDate($value);
        self::assertSame($value, $node->getDate());
    }

    public function test_set_get_time(): void
    {
        $node = new DateTime();
        $value = '10:59:54';

        $node->setTime($value);
        self::assertSame($value, $node->getTime());
    }

    public function test_set_get_time_zone(): void
    {
        $node = new DateTime();
        $value = '-01:00';

        $node->setTimeZone($value);
        self::assertSame($value, $node->getTimeZone());
    }

    public function test_serialize_with_null_values(): void
    {
        $node = new DateTime();
        $node->setTime(null);
        $node->setTimezone(null);
        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_datetime_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }

    public function test_serialize_without_null_values(): void
    {
        $node = new DateTime();
        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_datetime_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }
}
