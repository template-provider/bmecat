<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('VARIANT')]
class Variant extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('FVALUE')]
    protected string $value;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('SUPPLIER_AID_SUPPLEMENT')]
    protected string $supplierAidSupplement = '';

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getSupplierAidSupplement(): string
    {
        return $this->supplierAidSupplement;
    }

    public function setSupplierAidSupplement(string $supplierAidSupplement): void
    {
        $this->supplierAidSupplement = $supplierAidSupplement;
    }
}
