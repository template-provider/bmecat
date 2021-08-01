<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;

class ArticleDetailsTest extends TestCase
{
    private Serializer $serializer;

    protected function setUp(): void
    {
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function test_add_get_buyer_aides(): void
    {
        $buyerAids = [
            new BuyerAid(),
            new BuyerAid(),
            new BuyerAid(),
        ];

        $node = new ArticleDetails();
        static::assertEmpty($node->getBuyerAids());
        static::assertNull($node->getBuyerAids());

        foreach ($buyerAids as $buyerAid) {
            $node->addBuyerAid($buyerAid);
        }

        static::assertSame($buyerAids, $node->getBuyerAids());
    }

    public function test_add_get_special_treatment_classes(): void
    {
        $specialTreatmentClasses = [
            new SpecialTreatmentClass(),
            new SpecialTreatmentClass(),
            new SpecialTreatmentClass(),
        ];

        $node = new ArticleDetails();
        static::assertEmpty($node->getSpecialTreatmentClasses());
        static::assertNull($node->getSpecialTreatmentClasses());

        foreach ($specialTreatmentClasses as $specialTreatmentClass) {
            $node->addSpecialTreatmentClass($specialTreatmentClass);
        }

        static::assertSame($specialTreatmentClasses, $node->getSpecialTreatmentClasses());
    }

    public function test_add_get_keywords(): void
    {
        $keywords = [
            new Keyword(),
            new Keyword(),
            new Keyword(),
        ];

        $node = new ArticleDetails();
        static::assertEmpty($node->getKeywords());
        static::assertNull($node->getKeywords());

        foreach ($keywords as $keyword) {
            $node->addKeyword($keyword);
        }

        static::assertSame($keywords, $node->getKeywords());
    }

    public function test_add_get_article_status(): void
    {
        $articleStatus = [
            new ArticleStatus(),
            new ArticleStatus(),
            new ArticleStatus(),
        ];

        $node = new ArticleDetails();
        static::assertEmpty($node->getArticleStatus());
        static::assertNull($node->getArticleStatus());

        foreach ($articleStatus as $singleArticleStatus) {
            $node->addArticleStatus($singleArticleStatus);
        }

        static::assertSame($articleStatus, $node->getArticleStatus());
    }

    public function test_set_get_description_long(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        static::assertNull($node->getDescriptionLong());
        $node->setDescriptionLong($value);
        static::assertSame($value, $node->getDescriptionLong());
    }

    public function test_set_get_description_short(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        $node->setDescriptionShort($value);
        static::assertSame($value, $node->getDescriptionShort());
    }

    public function test_set_get_ean(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        static::assertNull($node->getEan());
        $node->setEan($value);
        static::assertSame($value, $node->getEan());
    }

    public function test_set_get_supplier_alt_aid(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        static::assertNull($node->getSupplierAltAid());
        $node->setSupplierAltAid($value);
        static::assertSame($value, $node->getSupplierAltAid());
    }

    public function test_set_get_manufacturer_name(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        static::assertNull($node->getManufacturerName());
        $node->setManufacturerName($value);
        static::assertSame($value, $node->getManufacturerName());
    }

    public function test_set_get_manufacturer_type_description(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        static::assertNull($node->getManufacturerTypeDescription());
        $node->setManufacturerTypeDescription($value);
        static::assertSame($value, $node->getManufacturerTypeDescription());
    }

    public function test_set_get_erp_group_buyer(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        static::assertNull($node->getErpGroupBuyer());
        $node->setErpGroupBuyer($value);
        static::assertSame($value, $node->getErpGroupBuyer());
    }

    public function test_set_get_erp_group_supplier(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        static::assertNull($node->getErpGroupSupplier());
        $node->setErpGroupSupplier($value);
        static::assertSame($value, $node->getErpGroupSupplier());
    }

    public function test_set_get_delivery_time(): void
    {
        $node = new ArticleDetails();
        $value = (float) rand(10, 1000);

        static::assertNull($node->getDeliveryTime());
        $node->setDeliveryTime($value);
        static::assertSame($value, $node->getDeliveryTime());
    }

    public function test_set_get_remarks(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        static::assertNull($node->getRemarks());
        $node->setRemarks($value);
        static::assertSame($value, $node->getRemarks());
    }

    public function test_set_get_article_order(): void
    {
        $node = new ArticleDetails();
        $value = rand(10, 1000);

        static::assertNull($node->getArticleOrder());
        $node->setArticleOrder($value);
        static::assertSame($value, $node->getArticleOrder());
    }

    public function test_set_get_description_segment(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        static::assertNull($node->getSegment());
        $node->setSegment($value);
        static::assertSame($value, $node->getSegment());
    }

    public function test_serialize_with_null_values(): void
    {
        $node = new ArticleDetails();
        $node->setDescriptionShort('');

        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_details_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        static::assertSame($expected, $actual);
    }

    public function test_serialize_without_null_values(): void
    {
        $node = new ArticleDetails();
        $node->setDescriptionShort('');

        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_details_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        static::assertSame($expected, $actual);
    }
}
