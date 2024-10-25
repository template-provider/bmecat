<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('PRICE_FLAG')]
class UpdatePrices extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type('int')]
    #[Serializer\SerializedName('prev_version')]
    #[Serializer\XmlAttribute]
    protected int $type = 0;

    /**
     *
     * @var \TemplateProvider\BMEcat\Node\NewCatalogArticle[]
     */
    #[Serializer\Expose]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\Article>')]
    #[Serializer\XmlList(inline: true, entry: 'ARTICLE')]
    protected ?array $articles = null;

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
}
