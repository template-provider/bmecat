<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("FEATURE_SYSTEM")
 */
class FeatureSystem extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FEATURE_SYSTEM_NAME")
     */
    protected string $featureSystemName = '';

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FEATURE_SYSTEM_DESCR")
     */
    protected ?string $featureSystemDescription = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\FeatureGroup>")
     * @Serializer\SerializedName("FEATURE_GROUP")
     *
     * @var \TemplateProvider\BMEcat\Node\FeatureGroup[]
     */
    protected array $featureGroup = [];

    public function getFeatureSystemName(): string
    {
        return $this->featureSystemName;
    }

    public function setFeatureSystemName(string $featureSystemName): void
    {
        $this->featureSystemName = $featureSystemName;
    }

    public function getFeatureSystemDescription(): ?string
    {
        return $this->featureSystemDescription;
    }

    public function setFeatureSystemDescription(?string $featureSystemDescription): void
    {
        $this->featureSystemDescription = $featureSystemDescription;
    }

    public function getFeatureGroup(): array
    {
        return $this->featureGroup;
    }

    public function setFeatureGroup(array $featureGroup): void
    {
        $this->featureGroup = $featureGroup;
    }
}
