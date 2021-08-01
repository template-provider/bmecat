<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("PRICE_FLAG")
 */
class UpdateProducts extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("int")
     * @Serializer\SerializedName("prev_version")
     * @Serializer\XmlAttribute
     */
    protected int $type = 0;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\Article>")
     * @Serializer\XmlList(inline = true, entry = "ARTICLE")
     *
     * @var \TemplateProvider\BMEcat\Node\NewCatalogArticle[]
     */
    protected ?array $articles = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\ArticleToCatalogGroupMap>")
     * @Serializer\XmlList(inline = true, entry = "ARTICLE_TO_CATALOG_GROUP_SYSTEMS")
     *
     * @var \TemplateProvider\BMEcat\Node\ArticleToCatalogGroupMap[]
     */
    protected ?array $articleToCatalogGroups = null;

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
    }

    public function getArticles(): ?array
    {
        return $this->articles;
    }

    public function setArticles(?array $articles): void
    {
        $this->articles = $articles;
    }

    public function getArticleToCatalogGroups(): ?array
    {
        return $this->articleToCatalogGroups;
    }

    public function setArticleToCatalogGroups(?array $articleToCatalogGroups): void
    {
        $this->articleToCatalogGroups = $articleToCatalogGroups;
    }
}
