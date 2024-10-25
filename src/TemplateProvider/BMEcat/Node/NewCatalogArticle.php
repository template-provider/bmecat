<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('ARTICLE')]
class NewCatalogArticle extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\SerializedName('ARTICLE_DETAILS')]
    #[Serializer\Type(ArticleDetails::class)]
    protected ArticleDetails $detail;

    /** @var null|array<\TemplateProvider\BMEcat\Node\ArticleFeatures> */
    #[Serializer\Expose]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\ArticleFeatures>')]
    #[Serializer\XmlList(inline: true, entry: 'ARTICLE_FEATURES')]
    protected ?array $features = null;

    #[Serializer\Expose]
    #[Serializer\SerializedName('ARTICLE_ORDER_DETAILS')]
    #[Serializer\Type(ArticleOrderDetails::class)]
    protected ArticleOrderDetails $orderDetails;

    /** @var array<\TemplateProvider\BMEcat\Node\ArticlePrice> */
    #[Serializer\Expose]
    #[Serializer\SerializedName('ARTICLE_PRICE_DETAILS')]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\ArticlePrice>')]
    #[Serializer\XmlList(entry: 'ARTICLE_PRICE')]
    protected array $prices = [];

    /** @var null|array<\TemplateProvider\BMEcat\Node\Mime> */
    #[Serializer\Expose]
    #[Serializer\SerializedName('MIME_INFO')]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\Mime>')]
    #[Serializer\XmlList(entry: 'MIME')]
    protected ?array $mimes = null;

    /** @var null|array<\TemplateProvider\BMEcat\Node\ArticleReference> */
    #[Serializer\Expose]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\ArticleReference>')]
    #[Serializer\XmlList(inline: true, entry: 'ARTICLE_REFERENCE')]
    protected ?array $articleReferences = null;

    public function __construct(#[Serializer\Expose]
        #[Serializer\Type('string')]
        #[Serializer\SerializedName('SUPPLIER_AID')]
        protected string $id) {}

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

    public function addFeatures(ArticleFeatures $features): void
    {
        $this->features[] = $features;
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

    public function addPrice(ArticlePrice $price): void
    {
        $this->prices[] = $price;
    }

    public function getMimes(): ?array
    {
        return $this->mimes;
    }

    public function setMimes(?array $mimes): void
    {
        $this->mimes = $mimes;
    }

    public function addMime(Mime $mime): void
    {
        $this->mimes[] = $mime;
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
