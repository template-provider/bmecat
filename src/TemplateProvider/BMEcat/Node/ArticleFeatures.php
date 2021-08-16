<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("ARTICLE_FEATURES")
 */
class ArticleFeatures extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("REFERENCE_FEATURE_SYSTEM_NAME")
     */
    protected ?string $referenceFeatureSystemName = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("REFERENCE_FEATURE_GROUP_NAME")
     */
    protected ?string $referenceFeatureGroupName = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("REFERENCE_FEATURE_GROUP_ID")
     */
    protected ?string $referenceFeatureGroupId = null;

    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("FEATURE")
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\ArticleFeature>")
     * @Serializer\XmlList(inline=true, entry="FEATURE")
     *
     * @var ArticleFeature[]
     */
    protected ?array $features = null;

    public function getReferenceFeatureSystemName(): ?string
    {
        return $this->referenceFeatureSystemName;
    }

    public function setReferenceFeatureSystemName(?string $referenceFeatureSystemName): void
    {
        $this->referenceFeatureSystemName = $referenceFeatureSystemName;
    }

    public function getReferenceFeatureGroupName(): ?string
    {
        return $this->referenceFeatureGroupName;
    }

    public function setReferenceFeatureGroupName(?string $referenceFeatureGroupName): void
    {
        $this->referenceFeatureGroupName = $referenceFeatureGroupName;
    }

    public function getReferenceFeatureGroupId(): ?string
    {
        return $this->referenceFeatureGroupId;
    }

    public function setReferenceFeatureGroupId(?string $referenceFeatureGroupId): void
    {
        $this->referenceFeatureGroupId = $referenceFeatureGroupId;
    }

    /**
     * @return null|ArticleFeature[]
     */
    public function getFeatures(): ?array
    {
        return $this->features;
    }

    /**
     * @param null|ArticleFeature[] $features
     */
    public function setFeatures(?array $features): void
    {
        $this->features = $features;
    }

    public function addFeature(ArticleFeature $feature): void
    {
        $this->features[] = $feature;
    }
}
