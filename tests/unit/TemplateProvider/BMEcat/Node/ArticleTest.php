<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function test_set_get_id(): void
    {
        $node = new NewCatalogArticle('foo');
        $value = sha1(uniqid(microtime(false), true));

        static::assertSame('foo', $node->getId());
        $node->setId($value);
        static::assertSame($value, $node->getId());
    }

    public function test_set_get_details(): void
    {
        $node = new NewCatalogArticle('foo');
        $details = new ArticleDetails();

        $node->setDetail($details);
        static::assertSame($details, $node->getDetail());
    }

    public function test_add_get_features(): void
    {
        $features = [
            new ArticleFeatures(),
            new ArticleFeatures(),
            new ArticleFeatures(),
        ];

        $node = new NewCatalogArticle('foo');
        static::assertEmpty($node->getFeatures());
        static::assertNull($node->getFeatures());

        foreach ($features as $featureBlock) {
            $node->addFeatures($featureBlock);
        }

        static::assertSame($features, $node->getFeatures());
    }

    public function test_add_get_prices(): void
    {
        $prices = [
            new ArticlePrice(),
            new ArticlePrice(),
            new ArticlePrice(),
        ];

        $node = new NewCatalogArticle('foo');
        static::assertEmpty($node->getPrices());
        static::assertSame([], $node->getPrices());

        foreach ($prices as $price) {
            $node->addPrice($price);
        }

        static::assertSame($prices, $node->getPrices());
    }

    public function test_add_get_article_order_details(): void
    {
        $node = new NewCatalogArticle('foo');
        $value = new ArticleOrderDetails();

        $node->setOrderDetails($value);
        static::assertSame($value, $node->getOrderDetails());
    }

    public function test_serialize_with_null_values(): void
    {
        $detail = new ArticleDetails();
        $orderDetail = new ArticleOrderDetails();
        $detail->setDescriptionShort('bar');
        $node = new NewCatalogArticle('foo');
        $node->setDetail($detail);
        $node->setOrderDetails($orderDetail);

        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);
        static::assertSame($expected, $actual);
    }

    public function test_serialize_without_null_values(): void
    {
        $detail = new ArticleDetails();
        $orderDetail = new ArticleOrderDetails();
        $detail->setDescriptionShort('bar');
        $node = new NewCatalogArticle('foo');
        $node->setDetail($detail);
        $node->setOrderDetails($orderDetail);

        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        static::assertSame($expected, $actual);
    }
}
