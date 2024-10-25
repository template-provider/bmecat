<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('FT_ALLOWED_VALUES')]
class FeatureAllowedValues extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type(AllowedValueIdRef::class)]
    #[Serializer\SerializedName('ALLOWED_VALUE_IDREF')]
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
