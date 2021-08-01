<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("SPECIAL_TREATMENT_CLASS")
 */
class SpecialTreatmentClass extends AbstractNode
{
    /**
     * @Serializer\Type("string")
     * @Serializer\XmlValue
     */
    protected string $value = '';

    /**
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute
     */
    private string $type = '';

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }
}
