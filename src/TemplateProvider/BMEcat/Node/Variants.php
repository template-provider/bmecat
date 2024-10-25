<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('VARIANTS')]
class Variants extends AbstractNode
{
    /** @var array<\TemplateProvider\BMEcat\Node\Variant> */
    #[Serializer\Expose]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\Variant>')]
    #[Serializer\XmlList(inline: true, entry: 'VARIANT')]
    protected array $variants = [];

    #[Serializer\Expose]
    #[Serializer\Type('int')]
    #[Serializer\SerializedName('VORDER')]
    #[Serializer\XmlElement(cdata: false)]
    protected int $articleOrder = 0;

    /**
     * @return array<Variant>
     */
    public function getVariants(): array
    {
        return $this->variants;
    }

    /**
     * @param array<Variant> $variants
     */
    public function setVariants(array $variants): void
    {
        $this->variants = $variants;
    }

    public function getArticleOrder(): int
    {
        return $this->articleOrder;
    }

    public function setArticleOrder(int $articleOrder): void
    {
        $this->articleOrder = $articleOrder;
    }
}
