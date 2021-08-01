<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("FT")
 */
class ClassificationGroupFeatureTemplate extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FT_IDREF")
     */
    protected string $idRef = '';

    /**
     * @Serializer\Expose
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("FT_MANDATORY")
     */
    protected bool $mandatory = false;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FT_DATATYPE")
     */
    protected string $dataType = '';

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FT_UNIT")
     */
    protected ?string $unit = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("int")
     * @Serializer\SerializedName("FT_ORDER")
     */
    protected ?int $order = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("TemplateProvider\BMEcat\Node\FeatureAllowedValues")
     * @Serializer\SerializedName("FT_ALLOWED_VALUES")
     */
    protected ?\TemplateProvider\BMEcat\Node\FeatureAllowedValues $featureAllowedValues = null;

    public function getIdRef(): string
    {
        return $this->idRef;
    }

    public function setIdRef(string $idRef): void
    {
        $this->idRef = $idRef;
    }

    public function isMandatory(): bool
    {
        return $this->mandatory;
    }

    public function setMandatory(bool $mandatory): void
    {
        $this->mandatory = $mandatory;
    }

    public function getDataType(): string
    {
        return $this->dataType;
    }

    public function setDataType(string $dataType): void
    {
        $this->dataType = $dataType;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): void
    {
        $this->unit = $unit;
    }

    public function getOrder(): ?int
    {
        return $this->order;
    }

    public function setOrder(?int $order): void
    {
        $this->order = $order;
    }

    public function getFeatureAllowedValues(): ?FeatureAllowedValues
    {
        return $this->featureAllowedValues;
    }

    public function setFeatureAllowedValues(?FeatureAllowedValues $featureAllowedValues): void
    {
        $this->featureAllowedValues = $featureAllowedValues;
    }
}
