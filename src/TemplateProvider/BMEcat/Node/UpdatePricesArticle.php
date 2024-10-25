<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('ARTICLE')]
class UpdatePricesArticle extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('SUPPLIER_AID')]
    protected string $id;

    /** @var array<\TemplateProvider\BMEcat\Node\ArticlePrice> */
    #[Serializer\Expose]
    #[Serializer\SerializedName('ARTICLE_PRICE_DETAILS')]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\ArticlePrice>')]
    #[Serializer\XmlList(entry: 'ARTICLE_PRICE')]
    protected array $prices = [];

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getPrices(): array
    {
        return $this->prices;
    }

    public function setPrices(array $prices): void
    {
        $this->prices = $prices;
    }
}
