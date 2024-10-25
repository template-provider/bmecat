<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('FEATURE')]
class ArticleFeature extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('FNAME')]
    protected string $name = '';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('VARIANTS')]
    #[Serializer\SkipWhenEmpty]
    #[Serializer\Exclude(if: '!empty(object.getValue())')]
    protected ?string $variants = null;

    /** @var array<FeatureValue> */
    #[Serializer\Expose]
    #[Serializer\SerializedName('FVALUE')]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\FeatureValue>')]
    #[Serializer\XmlList(inline: true, entry: 'FVALUE')]
    #[Serializer\Exclude(if: '!empty(object.getVariants())')]
    protected ?array $value = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('FUNIT')]
    protected ?string $unit = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('FORDER')]
    protected ?string $order = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('FDESCR')]
    protected ?string $description = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('FVALUE_DETAILS')]
    protected ?string $valueDetails = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getVariants(): ?string
    {
        return $this->variants;
    }

    public function setVariants(?string $variants): void
    {
        $this->variants = $variants;
    }

    /**
     * @return null|array<FeatureValue>
     */
    public function getValue(): ?array
    {
        return $this->value;
    }

    /**
     * @param null|array<FeatureValue> $value
     */
    public function setValue(?array $value): void
    {
        $this->value = $value;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): void
    {
        $this->unit = $unit;
    }

    public function getOrder(): ?string
    {
        return $this->order;
    }

    public function setOrder(?string $order): void
    {
        $this->order = $order;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getValueDetails(): ?string
    {
        return $this->valueDetails;
    }

    public function setValueDetails(?string $valueDetails): void
    {
        $this->valueDetails = $valueDetails;
    }
}
