<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("CATALOG_GROUP_SYSTEM")
 */
class CatalogGroupSystem extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("GROUP_SYSTEM_ID")
     */
    protected ?string $groupSystemId = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CATALOG_SYSTEM_NAME")
     */
    protected ?string $catalogSystemName = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("array<TemplateProvider\BMEcat\Node\CatalogStructure>")
     * @Serializer\SerializedName("CATALOG_STRUCTURE")
     *
     * @var \TemplateProvider\BMEcat\Node\CatalogStructure[]
     */
    protected array $catalogStructures = [];

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CATALOG_SYSTEM_DESCRIPTION")
     */
    protected ?string $catalogSystemDescription = null;

    public function getGroupSystemId(): ?string
    {
        return $this->groupSystemId;
    }

    public function setGroupSystemId(?string $groupSystemId): void
    {
        $this->groupSystemId = $groupSystemId;
    }

    public function getCatalogSystemName(): ?string
    {
        return $this->catalogSystemName;
    }

    public function setCatalogSystemName(?string $catalogSystemName): void
    {
        $this->catalogSystemName = $catalogSystemName;
    }

    public function getCatalogStructures(): array
    {
        return $this->catalogStructures;
    }

    public function setCatalogStructures(array $catalogStructures): void
    {
        $this->catalogStructures = $catalogStructures;
    }

    public function getCatalogSystemDescription(): ?string
    {
        return $this->catalogSystemDescription;
    }

    public function setCatalogSystemDescription(?string $catalogSystemDescription): void
    {
        $this->catalogSystemDescription = $catalogSystemDescription;
    }
}
