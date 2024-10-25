<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('BMECAT')]
#[Serializer\ExclusionPolicy('all')]
class Document extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\XmlAttribute]
    protected string $version = '1.2';

    #[Serializer\Expose]
    #[Serializer\SerializedName('xmlns')]
    #[Serializer\XmlAttribute]
    protected string $namespace = 'http://www.bmecat.org/bmecat/1.2/bmecat_new_catalog';

    #[Serializer\Expose]
    #[Serializer\SerializedName('xmlns:xsi')]
    #[Serializer\XmlAttribute]
    protected string $nullableNamespace = 'http://www.w3.org/2001/XMLSchema-instance';

    #[Serializer\Expose]
    #[Serializer\SerializedName('xsi:noNamespaceSchemaLocation')]
    #[Serializer\XmlAttribute]
    protected string $nullableLocation = 'http://www.w3.org/1999/xhtml.xsd';

    #[Serializer\Expose]
    #[Serializer\Type(Header::class)]
    #[Serializer\SerializedName('HEADER')]
    protected Header $header;

    #[Serializer\Expose]
    #[Serializer\Type(NewCatalog::class)]
    #[Serializer\SerializedName('T_NEW_CATALOG')]
    protected NewCatalog $catalog;

    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setHeader(Header $header): void
    {
        $this->header = $header;
    }

    public function getHeader(): Header
    {
        return $this->header;
    }

    public function hasHeader(): bool
    {
        return isset($this->header);
    }

    public function setNewCatalog(NewCatalog $catalog): void
    {
        $this->catalog = $catalog;
    }

    public function getNewCatalog(): NewCatalog
    {
        return $this->catalog;
    }
}
