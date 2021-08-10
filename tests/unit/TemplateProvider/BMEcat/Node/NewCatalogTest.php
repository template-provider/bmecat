<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;

class NewCatalogTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function test_add_get_article_node(): void
    {
        $articles = [
            new NewCatalogArticle('foo'),
            new NewCatalogArticle('bar'),
            new NewCatalogArticle('baz'),
        ];

        $node = new NewCatalog();
        static::assertNull($node->getArticles());

        foreach ($articles as $article) {
            $node->addArticle($article);
        }

        static::assertSame($articles, $node->getArticles());
    }

    public function test_serialize_with_null_values(): void
    {
        $node = new NewCatalog();
        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_new_catalog_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        static::assertSame($expected, $actual);
    }

    public function test_serialize_without_null_values(): void
    {
        $node = new NewCatalog();
        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_new_catalog_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        static::assertSame($expected, $actual);
    }

    public function test_serialize_with_catalog_structure(): void
    {
        $catalogStructure = new CatalogStructure();
        $catalogStructure->setGroupId('foo');
        $catalogGroupSystem = new CatalogGroupSystem();
        $catalogGroupSystem->setGroupSystemId('bar');
        $catalogGroupSystem->setCatalogStructures([$catalogStructure]);

        $node = new NewCatalog();
        $node->setCatalogGroupSystems([$catalogGroupSystem]);
        $context = SerializationContext::create()->setSerializeNull(false);

        $actual = $this->serializer->serialize($node, 'xml', $context);

        $expected = <<<'EXPECTED'
            <?xml version="1.0" encoding="UTF-8"?>
            <T_NEW_CATALOG>
              <CATALOG_GROUP_SYSTEM>
                <GROUP_SYSTEM_ID><![CDATA[bar]]></GROUP_SYSTEM_ID>
                <CATALOG_STRUCTURE>
                  <entry type="root">
                    <GROUP_ID><![CDATA[foo]]></GROUP_ID>
                    <GROUP_NAME><![CDATA[]]></GROUP_NAME>
                    <PARENT_ID><![CDATA[]]></PARENT_ID>
                  </entry>
                </CATALOG_STRUCTURE>
              </CATALOG_GROUP_SYSTEM>
            </T_NEW_CATALOG>

            EXPECTED;

        static::assertSame($expected, $actual);
    }
}
