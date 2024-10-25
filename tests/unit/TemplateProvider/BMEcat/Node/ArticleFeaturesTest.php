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
final class ArticleFeaturesTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function test_add_get_feature(): void
    {
        $features = [
            new ArticleFeature(),
            new ArticleFeature(),
            new ArticleFeature(),
        ];

        $node = new ArticleFeatures();
        self::assertEmpty($node->getFeatures());
        self::assertNull($node->getFeatures());

        foreach ($features as $feature) {
            $node->addFeature($feature);
        }

        self::assertSame($features, $node->getFeatures());
    }

    public function test_set_get_reference_feature_system_name(): void
    {
        $node = new ArticleFeatures();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getReferenceFeatureSystemName());
        $node->setReferenceFeatureSystemName($value);
        self::assertSame($value, $node->getReferenceFeatureSystemName());
    }

    public function test_set_get_reference_feature_group_name(): void
    {
        $node = new ArticleFeatures();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getReferenceFeatureGroupName());
        $node->setReferenceFeatureGroupName($value);
        self::assertSame($value, $node->getReferenceFeatureGroupName());
    }

    public function test_set_get_reference_feature_group_id(): void
    {
        $node = new ArticleFeatures();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getReferenceFeatureGroupId());
        $node->setReferenceFeatureGroupId($value);
        self::assertSame($value, $node->getReferenceFeatureGroupId());
    }

    public function test_serialize_with_null_values(): void
    {
        $node = new ArticleFeatures();
        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_features_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }

    public function test_serialize_without_null_values(): void
    {
        $node = new ArticleFeatures();
        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_features_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }
}
