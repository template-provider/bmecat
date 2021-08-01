<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;
use TemplateProvider\BMEcat\Node\ArticleDetails;
use TemplateProvider\BMEcat\Node\ArticleFeatures;
use TemplateProvider\BMEcat\Node\ArticleOrderDetails;
use TemplateProvider\BMEcat\Node\ArticlePrice;
use TemplateProvider\BMEcat\Node\Document;
use TemplateProvider\BMEcat\Node\Mime;
use TemplateProvider\BMEcat\Node\NewCatalog;
use TemplateProvider\BMEcat\Node\NewCatalogArticle;

class DocumentTest extends TestCase
{
    private SerializationContext $context;

    private DocumentBuilder $builder;

    /**
     * @throws Exception\InvalidSetterException
     */
    protected function setUp(): void
    {
        $data = [
            'header' =>[
                'generator_info' => 'DocumentTest Document',
                'catalog' => [
                    'id'        => 'MY_CATALOG',
                    'version'   => '0.99',
                    'language'  => 'EN',
                    'datetime'  => [
                        'date' => '1979-01-01',
                        'time' => '10:59:54',
                        'timezone' => '-01:00',
                    ],
                ],
                'supplier' => [
                    'id'    => 'BMECAT_TEST',
                    'name'  => 'TestSupplier',
                ],
                'agreements' => [],
            ],
        ];

        $serializer = SerializerBuilder::create()->build();
        $this->context = SerializationContext::create()->setSerializeNull(true);
        $this->builder = new DocumentBuilder($serializer, $this->context);

        /** @var Document $document */
        $document = NodeBuilder::fromArray($data, new Document());

        $catalog = new NewCatalog();
        $catalog->setArticleToCatalogGroups([]);
        $catalog->setCatalogGroupSystems([]);
        $catalog->setClassificationSystems([]);
        $catalog->setFeaturesSystems([]);
        $this->builder->setDocument($document);
        $document->setNewCatalog($catalog);

        foreach ([1, 2, 3] as $index) {
            $article = new NewCatalogArticle((string) $index);

            foreach ([['EUR', 10.50], ['GBP', 7.30]] as $value) {
                [$currency, $amount] = $value;

                $price = new ArticlePrice();

                $price->setPrice($amount);
                $price->setCurrency($currency);

                $article->addPrice($price);
                $articleDetails = new ArticleDetails();
                $articleDetails->setDescriptionShort('short_description');
                $articleDetails->setArticleStatus([]);
                $articleDetails->setBuyerAids([]);
                $articleDetails->setKeywords([]);
                $articleDetails->setSpecialTreatmentClasses([]);
                $article->setDetail($articleDetails);
                $article->setArticleReferences([]);
            }

            foreach ([['A', 'B', 'C'], ['F', 'G', 'H']] as $value) {
                [$systemName, $groupName, $groupId] = $value;

                $features = new ArticleFeatures();

                $features->setReferenceFeatureSystemName($systemName);
                $features->setReferenceFeatureGroupName($groupName);
                $features->setReferenceFeatureGroupId($groupId);

                $article->addFeatures($features);
                $article->setArticleReferences([]);
            }

            foreach ([
                ['image/jpeg', 'http://a.b/c/d.jpg', 'normal'],
                ['image/bmp', 'http://w.x/y/z.bmp', 'thumbnail'],
                    ] as $value) {
                [$type, $source, $purpose] = $value;

                $mime = new Mime();

                $mime->setType($type);
                $mime->setSource($source);
                $mime->setPurpose($purpose);

                $article->addMime($mime);
            }

            $orderDetails = new ArticleOrderDetails();
            $orderDetails->setNoCuPerOu(1);
            $orderDetails->setPriceQuantity(1);
            $orderDetails->setQuantityMin(1);
            $orderDetails->setQuantityInterval(1);

            $article->setOrderDetails($orderDetails);
            $article->setArticleReferences([]);

            $catalog->addArticle($article);
        }
    }

    /**
     * @throws Exception\MissingDocumentException
     */
    public function test_compare_document_with_null_values(): void
    {
        $expected = file_get_contents(__DIR__ . '/../Fixtures/document_with_null_values.xml');
        $actual = $this->builder->toString();

        static::assertSame($expected, $actual);
    }

    /**
     * @throws Exception\MissingDocumentException
     */
    public function test_compare_document_without_null_values(): void
    {
        $this->context->setSerializeNull(false);
        $expected = file_get_contents(__DIR__ . '/../Fixtures/document_without_null_values.xml');
        $actual = $this->builder->toString();

        static::assertSame($expected, $actual);
    }
}
