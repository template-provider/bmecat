<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;

class ArticlePriceTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function test_set_get_price(): void
    {
        $node = new ArticlePrice();
        $value = (float) rand(10, 1000);

        static::assertNull($node->getPrice());
        $node->setPrice($value);
        static::assertSame($value, $node->getPrice());
    }

    public function test_set_get_currency(): void
    {
        $node = new ArticlePrice();
        $value = substr(sha1(uniqid(microtime(false), true)), 0, 3);

        static::assertNull($node->getCurrency());
        $node->setCurrency($value);
        static::assertSame($value, $node->getCurrency());
    }

    public function test_serialize_with_null_values(): void
    {
        $node = new ArticlePrice();
        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_price_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        static::assertSame($expected, $actual);
    }

    public function test_serialize_without_null_values(): void
    {
        $node = new ArticlePrice();
        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_price_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        static::assertSame($expected, $actual);
    }
}
