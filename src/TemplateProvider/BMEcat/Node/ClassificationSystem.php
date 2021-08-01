<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("CLASSIFICATION_SYSTEM")
 */
class ClassificationSystem extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CLASSIFICATION_SYSTEM_NAME")
     */
    protected string $name = '';

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CLASSIFICATION_SYSTEM_FULLNAME")
     */
    protected ?string $fullName = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CLASSIFICATION_SYSTEM_VERSION")
     */
    protected ?string $version = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CLASSIFICATION_SYSTEM_DESCR")
     */
    protected ?string $description = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("int")
     * @Serializer\SerializedName("CLASSIFICATION_SYSTEM_LEVELS")
     */
    protected ?int $levels = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("TemplateProvider\BMEcat\Node\ClassificationSystemLevelNames")
     * @Serializer\SerializedName("CLASSIFICATION_SYSTEM_LEVEL_NAMES")
     */
    protected ?\TemplateProvider\BMEcat\Node\ClassificationSystemLevelNames $levelNames = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("TemplateProvider\BMEcat\Node\AllowedValues")
     * @Serializer\SerializedName("ALLOWED_VALUES")
     */
    protected ?\TemplateProvider\BMEcat\Node\AllowedValues $allowedValues = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("TemplateProvider\BMEcat\Node\Units")
     * @Serializer\SerializedName("UNITS")
     */
    protected ?\TemplateProvider\BMEcat\Node\Units $units = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("TemplateProvider\BMEcat\Node\ClassificationSystemFeatureTemplates")
     * @Serializer\SerializedName("CLASSIFICATION_SYSTEM_FEATURE_TEMPLATES")
     */
    protected ?\TemplateProvider\BMEcat\Node\ClassificationSystemFeatureTemplates $classificationSystemFeatureTemplates = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("TemplateProvider\BMEcat\Node\ClassificationGroups")
     * @Serializer\SerializedName("CLASSIFICATION_GROUPS")
     */
    protected ?\TemplateProvider\BMEcat\Node\ClassificationGroups $classificationGroups = null;
}
