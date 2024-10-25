<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('HEADER')]
class Header extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('GENERATOR_INFO')]
    protected ?string $generatorInfo = null;

    #[Serializer\Expose]
    #[Serializer\Type(Catalog::class)]
    #[Serializer\SerializedName('CATALOG')]
    protected Catalog $catalog;

    #[Serializer\Expose]
    #[Serializer\Type(Supplier::class)]
    #[Serializer\SerializedName('SUPPLIER')]
    protected Supplier $supplier;

    #[Serializer\Expose]
    #[Serializer\Type(Buyer::class)]
    #[Serializer\SerializedName('BUYER')]
    protected ?Buyer $buyer = null;

    #[Serializer\Expose]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\Agreement>')]
    #[Serializer\SerializedName('AGREEMENT')]
    protected ?array $agreements = null;

    public function getBuyer(): ?Buyer
    {
        return $this->buyer;
    }

    public function setBuyer(?Buyer $buyer): void
    {
        $this->buyer = $buyer;
    }

    public function getAgreements(): array
    {
        return $this->agreements;
    }

    public function setAgreements(array $agreements): void
    {
        $this->agreements = $agreements;
    }

    public function setGeneratorInfo(string $generatorInfo): void
    {
        $this->generatorInfo = $generatorInfo;
    }

    public function getGeneratorInfo(): ?string
    {
        return $this->generatorInfo;
    }

    public function setCatalog(Catalog $catalog): void
    {
        $this->catalog = $catalog;
    }

    public function getCatalog(): Catalog
    {
        return $this->catalog;
    }

    public function setSupplier(Supplier $supplier): void
    {
        $this->supplier = $supplier;
    }

    public function getSupplier(): Supplier
    {
        return $this->supplier;
    }
}
