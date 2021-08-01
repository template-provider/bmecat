<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("CLASSIFICATION_SYSTEM_LEVEL_NAME")
 */
class ClassificationSystemLevelName extends AbstractNode
{
    /**
     * @Serializer\Type("int")
     * @Serializer\XmlAttribute
     */
    protected int $level = 1;

    /**
     * @Serializer\XmlValue
     * @Serializer\Type("string")
     */
    protected string $value = '';

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): void
    {
        $this->level = $level;
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
