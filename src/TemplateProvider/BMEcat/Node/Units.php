<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('UNITS')]
class Units extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type(\TemplateProvider\BMEcat\Node\Unit::class)]
    #[Serializer\SerializedName('UNIT')]
    protected array $units = [];

    public function getUnits(): array
    {
        return $this->units;
    }

    public function setUnits(array $units): void
    {
        $this->units = $units;
    }
}
