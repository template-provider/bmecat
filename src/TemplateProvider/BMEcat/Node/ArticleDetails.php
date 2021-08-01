<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("ARTICLE_DETAILS")
 */
class ArticleDetails extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("DESCRIPTION_SHORT")
     */
    protected string $descriptionShort;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("DESCRIPTION_LONG")
     */
    protected ?string $descriptionLong = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EAN")
     */
    protected ?string $ean = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("SUPPLIER_ALT_AID")
     */
    protected ?string $supplierAltAid = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\BuyerAid>")
     * @Serializer\XmlList(inline=true, entry="BUYER_AID")
     *
     * @var \TemplateProvider\BMEcat\Node\BuyerAid[]
     */
    protected ?array $buyerAids = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MANUFACTURER_AID")
     */
    protected ?string $manufacturerAid = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MANUFACTURER_NAME")
     */
    protected ?string $manufacturerName = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MANUFACTURER_TYPE_DESCR")
     */
    protected ?string $manufacturerTypeDescription = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ERP_GROUP_BUYER")
     */
    protected ?string $erpGroupBuyer = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ERP_GROUP_SUPPLIER")
     */
    protected ?string $erpGroupSupplier = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("float")
     * @Serializer\SerializedName("DELIVERY_TIME")
     * @Serializer\XmlElement(cdata=false)
     */
    protected ?float $deliveryTime = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\SpecialTreatmentClass>")
     * @Serializer\XmlList(inline=true, entry="SPECIAL_TREATMENT_CLASS")
     *
     * @var \TemplateProvider\BMEcat\Node\SpecialTreatmentClass[]
     */
    protected ?array $specialTreatmentClasses = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\ArticleKeyword>")
     * @Serializer\XmlList(inline=true, entry="KEYWORD")
     *
     * @var \TemplateProvider\BMEcat\Node\Keyword[]
     */
    protected ?array $keywords = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("REMARKS")
     */
    protected ?string $remarks = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("SEGMENT")
     */
    protected ?string $segment = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("int")
     * @Serializer\SerializedName("ARTICLE_ORDER")
     * @Serializer\XmlElement(cdata=false)
     */
    protected ?int $articleOrder = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\ArticleStatus>")
     * @Serializer\XmlList(inline=true, entry="ARTICLE_STATUS")
     *
     * @var \TemplateProvider\BMEcat\Node\ArticleStatus[]
     */
    protected ?array $articleStatus = null;

    public function getDescriptionShort(): string
    {
        return $this->descriptionShort;
    }

    public function setDescriptionShort(string $descriptionShort): void
    {
        $this->descriptionShort = $descriptionShort;
    }

    public function getDescriptionLong(): ?string
    {
        return $this->descriptionLong;
    }

    public function setDescriptionLong(?string $descriptionLong): void
    {
        $this->descriptionLong = $descriptionLong;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): void
    {
        $this->ean = $ean;
    }

    public function getSupplierAltAid(): ?string
    {
        return $this->supplierAltAid;
    }

    public function setSupplierAltAid(?string $supplierAltAid): void
    {
        $this->supplierAltAid = $supplierAltAid;
    }

    public function getBuyerAids(): ?array
    {
        return $this->buyerAids;
    }

    public function setBuyerAids(?array $buyerAids): void
    {
        $this->buyerAids = $buyerAids;
    }

    public function addBuyerAid(BuyerAid $buyerAid): void
    {
        $this->buyerAids[] = $buyerAid;
    }

    public function getManufacturerAid(): ?string
    {
        return $this->manufacturerAid;
    }

    public function setManufacturerAid(?string $manufacturerAid): void
    {
        $this->manufacturerAid = $manufacturerAid;
    }

    public function getManufacturerName(): ?string
    {
        return $this->manufacturerName;
    }

    public function setManufacturerName(?string $manufacturerName): void
    {
        $this->manufacturerName = $manufacturerName;
    }

    public function getManufacturerTypeDescription(): ?string
    {
        return $this->manufacturerTypeDescription;
    }

    public function setManufacturerTypeDescription(?string $manufacturerTypeDescription): void
    {
        $this->manufacturerTypeDescription = $manufacturerTypeDescription;
    }

    public function getErpGroupBuyer(): ?string
    {
        return $this->erpGroupBuyer;
    }

    public function setErpGroupBuyer(?string $erpGroupBuyer): void
    {
        $this->erpGroupBuyer = $erpGroupBuyer;
    }

    public function getErpGroupSupplier(): ?string
    {
        return $this->erpGroupSupplier;
    }

    public function setErpGroupSupplier(?string $erpGroupSupplier): void
    {
        $this->erpGroupSupplier = $erpGroupSupplier;
    }

    public function getDeliveryTime(): ?float
    {
        return $this->deliveryTime;
    }

    public function setDeliveryTime(?float $deliveryTime): void
    {
        $this->deliveryTime = $deliveryTime;
    }

    public function getSpecialTreatmentClasses(): ?array
    {
        return $this->specialTreatmentClasses;
    }

    public function setSpecialTreatmentClasses(?array $specialTreatmentClasses): void
    {
        $this->specialTreatmentClasses = $specialTreatmentClasses;
    }

    public function addSpecialTreatmentClass(SpecialTreatmentClass $specialTreatmentClass): void
    {
        $this->specialTreatmentClasses[] = $specialTreatmentClass;
    }

    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    public function setKeywords(?array $keywords): void
    {
        $this->keywords = $keywords;
    }

    public function addKeyword(Keyword $keyword): void
    {
        $this->keywords[] = $keyword;
    }

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(?string $remarks): void
    {
        $this->remarks = $remarks;
    }

    public function getSegment(): ?string
    {
        return $this->segment;
    }

    public function setSegment(?string $segment): void
    {
        $this->segment = $segment;
    }

    public function getArticleOrder(): ?int
    {
        return $this->articleOrder;
    }

    public function setArticleOrder(?int $articleOrder): void
    {
        $this->articleOrder = $articleOrder;
    }

    public function getArticleStatus(): ?array
    {
        return $this->articleStatus;
    }

    public function setArticleStatus(?array $articleStatus): void
    {
        $this->articleStatus = $articleStatus;
    }

    public function addArticleStatus(ArticleStatus $articleStatus): void
    {
        $this->articleStatus[] = $articleStatus;
    }
}
