<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("CLASSIFICATION_GROUP_FEATURE_TEMPLATES")
 */
class ClassificationGroupFeatureTemplates extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("TemplateProvider\BMEcat\Node\ClassificationGroupFeatureTemplate")
     * @Serializer\SerializedName("CLASSIFICATION_GROUP_FEATURE_TEMPLATE")
     */
    protected array $featureTemplates = [];

    public function getFeatureTemplates(): array
    {
        return $this->featureTemplates;
    }

    public function setFeatureTemplates(array $featureTemplates): void
    {
        $this->featureTemplates = $featureTemplates;
    }
}
