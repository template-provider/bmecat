<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('ARTICLE_TO_CATALOGGROUP_MAP')]
class ArticleToCatalogGroupMap extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('ART_ID')]
    protected string $artId = '';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CATALOG_GROUP_ID')]
    protected string $catalogGroupId = '';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('ARTICLE_TO_CATALOGGROUP_MAP_ORDER')]
    protected ?string $articleToCatalogGroupMapOrder = null;

    public function getArtId(): string
    {
        return $this->artId;
    }

    public function setArtId(string $artId): void
    {
        $this->artId = $artId;
    }

    public function getCatalogGroupId(): string
    {
        return $this->catalogGroupId;
    }

    public function setCatalogGroupId(string $catalogGroupId): void
    {
        $this->catalogGroupId = $catalogGroupId;
    }

    public function getArticleToCatalogGroupMapOrder(): ?string
    {
        return $this->articleToCatalogGroupMapOrder;
    }

    public function setArticleToCatalogGroupMapOrder(?string $articleToCatalogGroupMapOrder): void
    {
        $this->articleToCatalogGroupMapOrder = $articleToCatalogGroupMapOrder;
    }
}
