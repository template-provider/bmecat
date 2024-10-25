<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('CATALOG')]
class Catalog extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CATALOG_ID')]
    protected string $id = '';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CATALOG_VERSION')]
    protected string $version = '';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('LANGUAGE')]
    protected string $language = '';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CATALOG_NAME')]
    protected ?string $name = null;

    #[Serializer\Expose]
    #[Serializer\Type(\TemplateProvider\BMEcat\Node\DateTime::class)]
    #[Serializer\SerializedName('DATETIME')]
    protected ?DateTime $dateTime = null;

    /**
     *
     * @var Territory[]
     */
    #[Serializer\Expose]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\Territory>')]
    #[Serializer\SerializedName('TERRITORY')]
    protected ?array $territories = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CURRENCY')]
    protected ?string $currency = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('MIME_ROOT')]
    protected ?string $mimeRoot = null;

    #[Serializer\Expose]
    #[Serializer\Type(\TemplateProvider\BMEcat\Node\PriceFlag::class)]
    #[Serializer\SerializedName('PRICE_FLAG')]
    protected ?\TemplateProvider\BMEcat\Node\PriceFlag $priceFlag = null;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getDateTime(): ?DateTime
    {
        return $this->dateTime;
    }

    public function setDateTime(?DateTime $dateTime): void
    {
        $this->dateTime = $dateTime;
    }

    public function getTerritories(): ?array
    {
        return $this->territories;
    }

    public function setTerritories(?array $territories): void
    {
        $this->territories = $territories;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    public function getMimeRoot(): ?string
    {
        return $this->mimeRoot;
    }

    public function setMimeRoot(?string $mimeRoot): void
    {
        $this->mimeRoot = $mimeRoot;
    }

    public function getPriceFlag(): ?PriceFlag
    {
        return $this->priceFlag;
    }

    public function setPriceFlag(?PriceFlag $priceFlag): void
    {
        $this->priceFlag = $priceFlag;
    }
}
