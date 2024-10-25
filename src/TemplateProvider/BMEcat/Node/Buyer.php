<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('BUYER')]
class Buyer extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type(\TemplateProvider\BMEcat\Node\BuyerId::class)]
    #[Serializer\SerializedName('BUYER_ID')]
    protected ?\TemplateProvider\BMEcat\Node\BuyerId $id = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('BUYER_NAME')]
    protected string $name = '';

    #[Serializer\Expose]
    #[Serializer\Type(\TemplateProvider\BMEcat\Node\Address::class)]
    #[Serializer\SerializedName('ADDRESS')]
    protected ?Address $address = null;

    public function getId(): ?BuyerId
    {
        return $this->id;
    }

    public function setId(?BuyerId $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }
}
