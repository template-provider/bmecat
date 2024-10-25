<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('ARTICLE_PRICE')]
class ArticlePriceDetail extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type(DateTime::class)]
    #[Serializer\SerializedName('DATETIME')]
    protected ?DateTime $dateTimeStart = null;

    #[Serializer\Expose]
    #[Serializer\Type(DateTime::class)]
    #[Serializer\SerializedName('DATETIME')]
    protected ?DateTime $dateTimeEnd = null;

    #[Serializer\Expose]
    #[Serializer\Type('bool')]
    #[Serializer\SerializedName('DAILY_PRICE')]
    #[Serializer\XmlElement(cdata: false)]
    protected ?bool $dailyPrice = null;

    /** @var array<\TemplateProvider\BMEcat\Node\ArticlePrice> */
    #[Serializer\Expose]
    #[Serializer\SerializedName('ARTICLE_PRICE_DETAILS')]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\ArticlePrice>')]
    #[Serializer\XmlList(entry: 'ARTICLE_PRICE')]
    protected array $prices = [];

    public function getDateTimeStart(): ?DateTime
    {
        return $this->dateTimeStart;
    }

    public function setDateTimeStart(?DateTime $dateTimeStart): void
    {
        $this->dateTimeStart = $dateTimeStart;
    }

    public function getDateTimeEnd(): ?DateTime
    {
        return $this->dateTimeEnd;
    }

    public function setDateTimeEnd(?DateTime $dateTimeEnd): void
    {
        $this->dateTimeEnd = $dateTimeEnd;
    }

    public function getDailyPrice(): ?bool
    {
        return $this->dailyPrice;
    }

    public function setDailyPrice(?bool $dailyPrice): void
    {
        $this->dailyPrice = $dailyPrice;
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
