<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('PUBLIC_KEY')]
class PublicKey extends AbstractNode
{
    #[Serializer\Type('string')]
    #[Serializer\XmlAttribute]
    protected string $type = '';

    #[Serializer\XmlValue]
    #[Serializer\Type('string')]
    protected ?string $value = null;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): void
    {
        $this->value = $value;
    }
}
