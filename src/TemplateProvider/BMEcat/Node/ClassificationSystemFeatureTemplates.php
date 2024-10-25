<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('CLASSIFICATION_SYSTEM_FEATURE_TEMPLATES')]
class ClassificationSystemFeatureTemplates extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type(ClassificationSystemFeatureTemplate::class)]
    #[Serializer\SerializedName('CLASSIFICATION_SYSTEM_FEATURE_TEMPLATE')]
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
