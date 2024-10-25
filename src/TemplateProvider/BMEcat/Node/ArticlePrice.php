<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('ARTICLE_PRICE')]
class ArticlePrice extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('price_type')]
    #[Serializer\XmlAttribute]
    protected string $type = 'gros_list';

    #[Serializer\Expose]
    #[Serializer\Type('float')]
    #[Serializer\SerializedName('PRICE_AMOUNT')]
    #[Serializer\XmlElement(cdata: false)]
    protected ?float $price = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('PRICE_CURRENCY')]
    protected ?string $currency = null;

    #[Serializer\Expose]
    #[Serializer\Type('float')]
    #[Serializer\SerializedName('TAX')]
    protected ?float $tax = null;

    #[Serializer\Expose]
    #[Serializer\Type('float')]
    #[Serializer\SerializedName('PRICE_FACTOR')]
    protected ?float $priceFactor = null;

    #[Serializer\Expose]
    #[Serializer\Type('float')]
    #[Serializer\SerializedName('LOWER_BOUND')]
    protected ?float $lowerBound = null;

    /** @var array<\TemplateProvider\BMEcat\Node\Territory> */
    #[Serializer\Expose]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\Territory>')]
    #[Serializer\SerializedName('TERRITORY')]
    protected ?array $territories = null;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    public function getTax(): ?float
    {
        return $this->tax;
    }

    public function setTax(?float $tax): void
    {
        $this->tax = $tax;
    }

    public function getPriceFactor(): ?float
    {
        return $this->priceFactor;
    }

    public function setPriceFactor(?float $priceFactor): void
    {
        $this->priceFactor = $priceFactor;
    }

    public function getLowerBound(): ?float
    {
        return $this->lowerBound;
    }

    public function setLowerBound(?float $lowerBound): void
    {
        $this->lowerBound = $lowerBound;
    }

    public function getTerritories(): ?array
    {
        return $this->territories;
    }

    public function setTerritories(?array $territories): void
    {
        $this->territories = $territories;
    }
}
