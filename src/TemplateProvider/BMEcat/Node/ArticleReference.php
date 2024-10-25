<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('ARTICLE_REFERENCE')]
class ArticleReference extends AbstractNode
{
    #[Serializer\Type('string')]
    #[Serializer\XmlAttribute]
    protected string $type = 'others';

    #[Serializer\Type('int')]
    #[Serializer\XmlAttribute]
    protected ?int $quantity = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('ART_ID_TO')]
    protected string $artIdTo = '';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CATALOG_ID')]
    protected ?string $catalogId = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CATALOG_VERSION')]
    protected ?string $catalogVersion = null;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getArtIdTo(): string
    {
        return $this->artIdTo;
    }

    public function setArtIdTo(string $artIdTo): void
    {
        $this->artIdTo = $artIdTo;
    }

    public function getCatalogId(): ?string
    {
        return $this->catalogId;
    }

    public function setCatalogId(?string $catalogId): void
    {
        $this->catalogId = $catalogId;
    }

    public function getCatalogVersion(): ?string
    {
        return $this->catalogVersion;
    }

    public function setCatalogVersion(?string $catalogVersion): void
    {
        $this->catalogVersion = $catalogVersion;
    }
}
