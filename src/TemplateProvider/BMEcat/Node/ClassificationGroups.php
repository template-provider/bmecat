<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('CLASSIFICATION_GROUPS')]
class ClassificationGroups extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type(\TemplateProvider\BMEcat\Node\ClassificationGroup::class)]
    #[Serializer\SerializedName('CLASSIFICATION_GROUP')]
    protected array $classificationGroups = [];

    public function getClassificationGroups(): array
    {
        return $this->classificationGroups;
    }

    public function setClassificationGroups(array $classificationGroups): void
    {
        $this->classificationGroups = $classificationGroups;
    }
}
