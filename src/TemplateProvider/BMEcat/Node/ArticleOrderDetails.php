<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("ARTICLE_ORDER_DETAILS")
 */
class ArticleOrderDetails extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ORDER_UNIT")
     */
    protected string $orderUnit = '';

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CONTENT_UNIT")
     */
    protected ?string $contentUnit = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("float")
     * @Serializer\SerializedName("NO_CU_PER_OU")
     * @Serializer\XmlElement(cdata=false)
     */
    protected ?float $noCuPerOu  = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("float")
     * @Serializer\SerializedName("PRICE_QUANTITY")
     * @Serializer\XmlElement(cdata=false)
     */
    protected ?float $priceQuantity = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("int")
     * @Serializer\SerializedName("QUANTITY_MIN")
     * @Serializer\XmlElement(cdata=false)
     */
    protected ?int $quantityMin = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("QUANTITY_INTERVAL")
     * @Serializer\XmlElement(cdata=false)
     */
    protected ?int $quantityInterval = null;

    public function getOrderUnit(): string
    {
        return $this->orderUnit;
    }

    public function setOrderUnit(string $orderUnit): void
    {
        $this->orderUnit = $orderUnit;
    }

    public function getContentUnit(): ?string
    {
        return $this->contentUnit;
    }

    public function setContentUnit(?string $contentUnit): void
    {
        $this->contentUnit = $contentUnit;
    }

    public function getNoCuPerOu(): ?float
    {
        return $this->noCuPerOu;
    }

    public function setNoCuPerOu(?float $noCuPerOu): void
    {
        $this->noCuPerOu = $noCuPerOu;
    }

    public function getPriceQuantity(): ?float
    {
        return $this->priceQuantity;
    }

    public function setPriceQuantity(?float $priceQuantity): void
    {
        $this->priceQuantity = $priceQuantity;
    }

    public function getQuantityMin(): ?int
    {
        return $this->quantityMin;
    }

    public function setQuantityMin(?int $quantityMin): void
    {
        $this->quantityMin = $quantityMin;
    }

    public function getQuantityInterval(): ?int
    {
        return $this->quantityInterval;
    }

    public function setQuantityInterval(?int $quantityInterval): void
    {
        $this->quantityInterval = $quantityInterval;
    }
}
