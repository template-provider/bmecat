<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('CLASSIFICATION_SYSTEM_LEVEL_NAMES')]
class ClassificationSystemLevelNames extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type(\TemplateProvider\BMEcat\Node\ClassificationSystemLevelName::class)]
    #[Serializer\SerializedName('CLASSIFICATION_SYSTEM_LEVEL_NAME')]
    protected array $levelName = [];

    public function getLevelName(): array
    {
        return $this->levelName;
    }

    public function setLevelName(array $levelName): void
    {
        $this->levelName = $levelName;
    }
}
