<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("MIME")
 * @JMS\Serializer\Annotation\ExclusionPolicy("all")
 */
class Mime extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MIME_TYPE")
     */
    protected ?string $type = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MIME_SOURCE")
     */
    protected string $source = '';

    /**
     * @Serializer\Expose
     * @Serializer\SkipWhenEmpty
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MIME_DESCR")
     */
    protected ?string $description = null;

    /**
     * @Serializer\Expose
     * @Serializer\SkipWhenEmpty
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MIME_ALT")
     */
    protected ?string $alternateDescription = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MIME_PURPOSE")
     */
    protected ?string $purpose = null;

    /**
     * @Serializer\Expose
     * @Serializer\SkipWhenEmpty
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MIME_ORDER")
     */
    protected ?string $order = null;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function setSource(string $source)
    {
        $this->source = $source;
    }

    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    public function setPurpose(string $purpose)
    {
        $this->purpose = $purpose;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getAlternateDescription(): ?string
    {
        return $this->alternateDescription;
    }

    public function setAlternateDescription(?string $alternateDescription): void
    {
        $this->alternateDescription = $alternateDescription;
    }

    public function getOrder(): ?string
    {
        return $this->order;
    }

    public function setOrder(?string $order): void
    {
        $this->order = $order;
    }
}
