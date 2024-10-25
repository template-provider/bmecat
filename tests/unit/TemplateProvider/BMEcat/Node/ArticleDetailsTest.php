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
final class ArticleDetailsTest extends TestCase
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
        self::assertEmpty($node->getBuyerAids());
        self::assertNull($node->getBuyerAids());

        foreach ($buyerAids as $buyerAid) {
            $node->addBuyerAid($buyerAid);
        }

        self::assertSame($buyerAids, $node->getBuyerAids());
    }

    public function test_add_get_special_treatment_classes(): void
    {
        $specialTreatmentClasses = [
            new SpecialTreatmentClass(),
            new SpecialTreatmentClass(),
            new SpecialTreatmentClass(),
        ];

        $node = new ArticleDetails();
        self::assertEmpty($node->getSpecialTreatmentClasses());
        self::assertNull($node->getSpecialTreatmentClasses());

        foreach ($specialTreatmentClasses as $specialTreatmentClass) {
            $node->addSpecialTreatmentClass($specialTreatmentClass);
        }

        self::assertSame($specialTreatmentClasses, $node->getSpecialTreatmentClasses());
    }

    public function test_add_get_keywords(): void
    {
        $keywords = [
            new Keyword(),
            new Keyword(),
            new Keyword(),
        ];

        $node = new ArticleDetails();
        self::assertEmpty($node->getKeywords());
        self::assertNull($node->getKeywords());

        foreach ($keywords as $keyword) {
            $node->addKeyword($keyword);
        }

        self::assertSame($keywords, $node->getKeywords());
    }

    public function test_add_get_article_status(): void
    {
        $articleStatus = [
            new ArticleStatus(),
            new ArticleStatus(),
            new ArticleStatus(),
        ];

        $node = new ArticleDetails();
        self::assertEmpty($node->getArticleStatus());
        self::assertNull($node->getArticleStatus());

        foreach ($articleStatus as $singleArticleStatus) {
            $node->addArticleStatus($singleArticleStatus);
        }

        self::assertSame($articleStatus, $node->getArticleStatus());
    }

    public function test_set_get_description_long(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getDescriptionLong());
        $node->setDescriptionLong($value);
        self::assertSame($value, $node->getDescriptionLong());
    }

    public function test_set_get_description_short(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        $node->setDescriptionShort($value);
        self::assertSame($value, $node->getDescriptionShort());
    }

    public function test_set_get_ean(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getEan());
        $node->setEan($value);
        self::assertSame($value, $node->getEan());
    }

    public function test_set_get_supplier_alt_aid(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getSupplierAltAid());
        $node->setSupplierAltAid($value);
        self::assertSame($value, $node->getSupplierAltAid());
    }

    public function test_set_get_manufacturer_name(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getManufacturerName());
        $node->setManufacturerName($value);
        self::assertSame($value, $node->getManufacturerName());
    }

    public function test_set_get_manufacturer_type_description(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getManufacturerTypeDescription());
        $node->setManufacturerTypeDescription($value);
        self::assertSame($value, $node->getManufacturerTypeDescription());
    }

    public function test_set_get_erp_group_buyer(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getErpGroupBuyer());
        $node->setErpGroupBuyer($value);
        self::assertSame($value, $node->getErpGroupBuyer());
    }

    public function test_set_get_erp_group_supplier(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getErpGroupSupplier());
        $node->setErpGroupSupplier($value);
        self::assertSame($value, $node->getErpGroupSupplier());
    }

    public function test_set_get_delivery_time(): void
    {
        $node = new ArticleDetails();
        $value = (float) random_int(10, 1000);

        self::assertNull($node->getDeliveryTime());
        $node->setDeliveryTime($value);
        self::assertSame($value, $node->getDeliveryTime());
    }

    public function test_set_get_remarks(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getRemarks());
        $node->setRemarks($value);
        self::assertSame($value, $node->getRemarks());
    }

    public function test_set_get_article_order(): void
    {
        $node = new ArticleDetails();
        $value = random_int(10, 1000);

        self::assertNull($node->getArticleOrder());
        $node->setArticleOrder($value);
        self::assertSame($value, $node->getArticleOrder());
    }

    public function test_set_get_description_segment(): void
    {
        $node = new ArticleDetails();
        $value = sha1(uniqid(microtime(false), true));

        self::assertNull($node->getSegment());
        $node->setSegment($value);
        self::assertSame($value, $node->getSegment());
    }

    public function test_serialize_with_null_values(): void
    {
        $node = new ArticleDetails();
        $node->setDescriptionShort('');

        $context = SerializationContext::create()->setSerializeNull(true);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_details_with_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }

    public function test_serialize_without_null_values(): void
    {
        $node = new ArticleDetails();
        $node->setDescriptionShort('');

        $context = SerializationContext::create()->setSerializeNull(false);

        $expected = file_get_contents(__DIR__ . '/../Fixtures/empty_article_details_without_null_values.xml');
        $actual = $this->serializer->serialize($node, 'xml', $context);

        self::assertSame($expected, $actual);
    }
}
