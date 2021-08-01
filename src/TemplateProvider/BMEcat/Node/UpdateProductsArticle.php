<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("ARTICLE")
 */
class UpdateProductsArticle extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("SUPPLIER_AID")
     */
    protected string $id;

    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("ARTICLE_DETAILS")
     * @Serializer\Type("TemplateProvider\BMEcat\Node\ArticleDetails")
     */
    protected ArticleDetails $detail;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\ArticleFeatures>")
     * @Serializer\XmlList( inline=true, entry="ARTICLE_FEATURES")
     *
     * @var null|\TemplateProvider\BMEcat\Node\ArticleFeatures[]
     */
    protected ?array $features = null;

    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("ARTICLE_ORDER_DETAILS")
     * @Serializer\Type("TemplateProvider\BMEcat\Node\ArticleOrderDetails")
     */
    protected ArticleOrderDetails $orderDetails;

    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("ARTICLE_PRICE_DETAILS")
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\ArticlePrice>")
     * @Serializer\XmlList( entry="ARTICLE_PRICE")
     *
     * @var \TemplateProvider\BMEcat\Node\ArticlePrice[]
     */
    protected array $prices = [];

    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("MIME_INFO")
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\Mime>")
     * @Serializer\XmlList( entry="MIME")
     *
     * @var null|\TemplateProvider\BMEcat\Node\Mime[]
     */
    protected ?array $mimes = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\ArticleReference>")
     * @Serializer\XmlList( inline=true, entry="ARTICLE_REFERENCE")
     *
     * @var null|\TemplateProvider\BMEcat\Node\ArticleReference[]
     */
    protected ?array $articleReferences = null;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getDetail(): ArticleDetails
    {
        return $this->detail;
    }

    public function setDetail(ArticleDetails $detail): void
    {
        $this->detail = $detail;
    }

    public function getFeatures(): ?array
    {
        return $this->features;
    }

    public function setFeatures(?array $features): void
    {
        $this->features = $features;
    }

    public function getOrderDetails(): ArticleOrderDetails
    {
        return $this->orderDetails;
    }

    public function setOrderDetails(ArticleOrderDetails $orderDetails): void
    {
        $this->orderDetails = $orderDetails;
    }

    public function getPrices(): array
    {
        return $this->prices;
    }

    public function setPrices(array $prices): void
    {
        $this->prices = $prices;
    }

    public function getMimes(): ?array
    {
        return $this->mimes;
    }

    public function setMimes(?array $mimes): void
    {
        $this->mimes = $mimes;
    }

    public function getArticleReferences(): ?array
    {
        return $this->articleReferences;
    }

    public function setArticleReferences(?array $articleReferences): void
    {
        $this->articleReferences = $articleReferences;
    }
}
