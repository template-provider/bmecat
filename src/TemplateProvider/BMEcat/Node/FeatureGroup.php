<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("FEATURE_GROUP")
 */
class FeatureGroup extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FEATURE_GROUP_ID")
     */
    protected string $featureGroupId = '';

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FEATURE_GROUP_NAME")
     */
    protected string $featureGroupName = '';

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\FeatureTemplate>")
     * @Serializer\SerializedName("FEATURE_TEMPLATE")
     *
     * @var \TemplateProvider\BMEcat\Node\FeatureTemplate[]
     */
    protected ?array $featureTemplates = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FEATURE_GROUP_DESCR")
     */
    protected ?string $featureGroupDescription = null;

    public function getFeatureGroupId(): string
    {
        return $this->featureGroupId;
    }

    public function setFeatureGroupId(string $featureGroupId): void
    {
        $this->featureGroupId = $featureGroupId;
    }

    public function getFeatureGroupName(): string
    {
        return $this->featureGroupName;
    }

    public function setFeatureGroupName(string $featureGroupName): void
    {
        $this->featureGroupName = $featureGroupName;
    }

    public function getFeatureTemplates(): ?array
    {
        return $this->featureTemplates;
    }

    public function setFeatureTemplates(?array $featureTemplates): void
    {
        $this->featureTemplates = $featureTemplates;
    }

    public function getFeatureGroupDescription(): ?string
    {
        return $this->featureGroupDescription;
    }

    public function setFeatureGroupDescription(?string $featureGroupDescription): void
    {
        $this->featureGroupDescription = $featureGroupDescription;
    }
}
