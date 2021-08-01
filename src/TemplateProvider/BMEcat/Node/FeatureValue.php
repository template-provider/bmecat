<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("FVALUE")
 */
class FeatureValue extends AbstractNode
{
    /**
     * @Serializer\XmlValue
     * @Serializer\Type("string")
     */
    protected string $value = '';

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }
}
