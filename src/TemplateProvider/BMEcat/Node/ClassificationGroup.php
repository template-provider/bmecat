<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('CLASSIFICATION_GROUP')]
class ClassificationGroup extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CLASSIFICATION_GROUP_ID')]
    protected string $id = '';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CLASSIFICATION_GROUP_NAME')]
    protected string $name = '';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CLASSIFICATION_GROUP_DESCR')]
    protected ?string $description = null;

    #[Serializer\Expose]
    #[Serializer\Type('TemplateProvider\BMEcat\Node\ClassificationGroupsSynonyms')]
    #[Serializer\SerializedName('CLASSIFICATION_GROUP_SYNONYMS')]
    protected ?ClassificationGroupsSynonymsNode $classificationGroupsSynonyms = null;

    #[Serializer\Expose]
    #[Serializer\Type('TemplateProvider\BMEcat\Node\ClassificationGroupsFeatureTemplates')]
    #[Serializer\SerializedName('CLASSIFICATION_GROUP_FEATURE_TEMPLATES')]
    protected ?ClassificationGroupsFeatureTemplatesNode $classificationGroupsFeatureTemplates = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CLASSIFICATION_GROUP_PARENT_ID')]
    protected ?string $parentId = null;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getClassificationGroupsSynonyms(): ?ClassificationGroupsSynonymsNode
    {
        return $this->classificationGroupsSynonyms;
    }

    public function setClassificationGroupsSynonyms(?ClassificationGroupsSynonymsNode $classificationGroupsSynonyms): void
    {
        $this->classificationGroupsSynonyms = $classificationGroupsSynonyms;
    }

    public function getClassificationGroupsFeatureTemplates(): ?ClassificationGroupsFeatureTemplatesNode
    {
        return $this->classificationGroupsFeatureTemplates;
    }

    public function setClassificationGroupsFeatureTemplates(?ClassificationGroupsFeatureTemplatesNode $classificationGroupsFeatureTemplates): void
    {
        $this->classificationGroupsFeatureTemplates = $classificationGroupsFeatureTemplates;
    }

    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    public function setParentId(?string $parentId): void
    {
        $this->parentId = $parentId;
    }
}
