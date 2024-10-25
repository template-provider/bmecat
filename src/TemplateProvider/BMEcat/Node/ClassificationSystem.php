<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('CLASSIFICATION_SYSTEM')]
class ClassificationSystem extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CLASSIFICATION_SYSTEM_NAME')]
    protected string $name = '';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CLASSIFICATION_SYSTEM_FULLNAME')]
    protected ?string $fullName = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CLASSIFICATION_SYSTEM_VERSION')]
    protected ?string $version = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('CLASSIFICATION_SYSTEM_DESCR')]
    protected ?string $description = null;

    #[Serializer\Expose]
    #[Serializer\Type('int')]
    #[Serializer\SerializedName('CLASSIFICATION_SYSTEM_LEVELS')]
    protected ?int $levels = null;

    #[Serializer\Expose]
    #[Serializer\Type(ClassificationSystemLevelNames::class)]
    #[Serializer\SerializedName('CLASSIFICATION_SYSTEM_LEVEL_NAMES')]
    protected ?ClassificationSystemLevelNames $levelNames = null;

    #[Serializer\Expose]
    #[Serializer\Type(AllowedValues::class)]
    #[Serializer\SerializedName('ALLOWED_VALUES')]
    protected ?AllowedValues $allowedValues = null;

    #[Serializer\Expose]
    #[Serializer\Type(Units::class)]
    #[Serializer\SerializedName('UNITS')]
    protected ?Units $units = null;

    #[Serializer\Expose]
    #[Serializer\Type(ClassificationSystemFeatureTemplates::class)]
    #[Serializer\SerializedName('CLASSIFICATION_SYSTEM_FEATURE_TEMPLATES')]
    protected ?ClassificationSystemFeatureTemplates $classificationSystemFeatureTemplates = null;

    #[Serializer\Expose]
    #[Serializer\Type(ClassificationGroups::class)]
    #[Serializer\SerializedName('CLASSIFICATION_GROUPS')]
    protected ?ClassificationGroups $classificationGroups = null;
}
