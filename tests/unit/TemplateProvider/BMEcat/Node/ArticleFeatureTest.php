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
final class ArticleFeatureTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function test_set_get_name(): void
    {
        $node = new ArticleFeature();
        $value = sha1(uniqid(microtime(false), true));

        $node->setName($value);
        self::assertSame($value, $node->getName());
    }

    public function test_set_get_value(): void
    {
        $node = new ArticleFeature();
        $value = sha1(uniqid(microtime(false), true));

        $node->setValue([$value]); // @phpstan-ignore-line
        self::assertSame([$value], $node->getValue()); // @phpstan-ignore-line
    }

    public function test_serialize_with_null_values(): void
    {
        $node = new ArticleFeature();
        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_feature_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }

    public function test_serialize_without_null_values(): void
    {
        $node = new ArticleFeature();
        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_feature_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }
}
