<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("ARTICLE_PRICE")
 */
class ArticlePriceDetail extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("TemplateProvider\BMEcat\Node\DateTime")
     * @Serializer\SerializedName("DATETIME")
     */
    protected ?\TemplateProvider\BMEcat\Node\DateTime $dateTimeStart = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("TemplateProvider\BMEcat\Node\DateTime")
     * @Serializer\SerializedName("DATETIME")
     */
    protected ?\TemplateProvider\BMEcat\Node\DateTime $dateTimeEnd = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("DAILY_PRICE")
     * @Serializer\XmlElement(cdata=false)
     */
    protected ?bool $dailyPrice = null;

    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("ARTICLE_PRICE_DETAILS")
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\ArticlePrice>")
     * @Serializer\XmlList( entry="ARTICLE_PRICE")
     *
     * @var \TemplateProvider\BMEcat\Node\ArticlePrice[]
     */
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
