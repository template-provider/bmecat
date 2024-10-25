<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('SUPPLIER')]
class Supplier extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('SUPPLIER_ID')]
    protected ?string $id = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('SUPPLIER_NAME')]
    protected string $name = '';

    #[Serializer\Expose]
    #[Serializer\Type(\TemplateProvider\BMEcat\Node\Address::class)]
    #[Serializer\SerializedName('ADDRESS')]
    protected ?Address $address = null;

    /**
     *
     * @var \TemplateProvider\BMEcat\Node\Mime[]
     */
    #[Serializer\Expose]
    #[Serializer\SerializedName('MIME_INFO')]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\Mime>')]
    #[Serializer\XmlList(entry: 'MIME')]
    protected ?array $mimes = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): void
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

    public function getMimes(): ?array
    {
        return $this->mimes;
    }

    public function setMimes(?array $mimes): void
    {
        $this->mimes = $mimes;
    }
}
