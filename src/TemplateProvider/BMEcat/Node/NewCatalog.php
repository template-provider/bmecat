<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("T_NEW_CATALOG")
 */
class NewCatalog extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\FeatureSystem>")
     * @Serializer\XmlList(inline = true, entry = "FEATURE_SYSTEM")
     *
     * @var \TemplateProvider\BMEcat\Node\FeatureSystem[]
     */
    protected ?array $featuresSystems = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\ClassificationSystem>")
     * @Serializer\XmlList(inline = true, entry = "CLASSIFICATION_SYSTEM")
     *
     * @var \TemplateProvider\BMEcat\Node\ClassificationSystem[]
     */
    protected ?array $classificationSystems = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\NewCatalogArticle>")
     * @Serializer\XmlList(inline = true, entry = "ARTICLE")
     *
     * @var null|\TemplateProvider\BMEcat\Node\NewCatalogArticle[]
     */
    protected ?array $articles = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\CatalogGroupSystem>")
     * @Serializer\XmlList(inline = true, entry = "CATALOG_GROUP_SYSTEM")
     *
     * @var \TemplateProvider\BMEcat\Node\CatalogGroupSystem[]
     */
    protected ?array $catalogGroupSystems = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\ArticleToCatalogGroupMap>")
     * @Serializer\XmlList(inline = true, entry = "ARTICLE_TO_CATALOG_GROUP_SYSTEMS")
     *
     * @var \TemplateProvider\BMEcat\Node\ArticleToCatalogGroupMap[]
     */
    protected ?array $articleToCatalogGroups = null;

    public function getFeaturesSystems(): ?array
    {
        return $this->featuresSystems;
    }

    public function setFeaturesSystems(?array $featuresSystems): void
    {
        $this->featuresSystems = $featuresSystems;
    }

    public function getClassificationSystems(): ?array
    {
        return $this->classificationSystems;
    }

    public function setClassificationSystems(?array $classificationSystems): void
    {
        $this->classificationSystems = $classificationSystems;
    }

    public function getArticles(): ?array
    {
        return $this->articles;
    }

    public function setArticles(?array $articles): void
    {
        $this->articles = $articles;
    }

    public function addArticle(NewCatalogArticle $article): void
    {
        $this->articles[] = $article;
    }

    public function getCatalogGroupSystems(): ?array
    {
        return $this->catalogGroupSystems;
    }

    public function setCatalogGroupSystems(?array $catalogGroupSystems): void
    {
        $this->catalogGroupSystems = $catalogGroupSystems;
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
