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
final class ArticleOrderDetailsTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function test_set_get_order_unit(): void
    {
        $node = new ArticleOrderDetails();
        $value = sha1(uniqid(microtime(false), true));

        $node->setOrderUnit($value);
        self::assertSame($value, $node->getOrderUnit());
    }

    public function test_set_get_content_unit(): void
    {
        $node = new ArticleOrderDetails();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getContentUnit());
        $node->setContentUnit($value);
        self::assertSame($value, $node->getContentUnit());
    }

    public function test_set_get_no_cu_per_ou(): void
    {
        $node = new ArticleOrderDetails();
        $value = (float) random_int(10, 1000);

        self::assertNull($node->getNoCuPerOu());
        $node->setNoCuPerOu($value);
        self::assertSame($value, $node->getNoCuPerOu());
    }

    public function test_set_get_price_quantity(): void
    {
        $node = new ArticleOrderDetails();
        $value = (float) random_int(10, 1000);

        self::assertNull($node->getPriceQuantity());
        $node->setPriceQuantity($value);
        self::assertSame($value, $node->getPriceQuantity());
    }

    public function test_set_get_quantity_min(): void
    {
        $node = new ArticleOrderDetails();
        $value = random_int(10, 1000);

        self::assertNull($node->getQuantityMin());
        $node->setQuantityMin($value);
        self::assertSame($value, $node->getQuantityMin());
    }

    public function test_set_get_quantity_interval(): void
    {
        $node = new ArticleOrderDetails();
        $value = random_int(10, 1000);

        self::assertNull($node->getQuantityInterval());
        $node->setQuantityInterval($value);
        self::assertSame($value, $node->getQuantityInterval());
    }

    public function test_serialize_with_null_values(): void
    {
        $node = new ArticleOrderDetails();
        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_order_details_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }

    public function test_serialize_without_null_values(): void
    {
        $node = new ArticleOrderDetails();
        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_order_details_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }
}
