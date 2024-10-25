<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('ALLOWED_VALUES')]
class AllowedValues extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type(\TemplateProvider\BMEcat\Node\AllowedValue::class)]
    #[Serializer\SerializedName('ALLOWED_VALUE')]
    protected array $allowedValues = [];

    public function getAllowedValues(): array
    {
        return $this->allowedValues;
    }

    public function setAllowedValues(array $allowedValues): void
    {
        $this->allowedValues = $allowedValues;
    }
}
