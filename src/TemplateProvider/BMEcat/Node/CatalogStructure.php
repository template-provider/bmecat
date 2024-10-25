<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('CATALOG_STRUCTURE')]
class CatalogStructure extends AbstractNode
{
    #[Serializer\Type('string')]
    #[Serializer\XmlAttribute]
    protected string $type = 'root';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('GROUP_ID')]
    protected string $groupId = '';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('GROUP_NAME')]
    protected string $groupName = '';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('GROUP_DESCRIPTION')]
    protected ?string $groupDescription = null;

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('PARENT_ID')]
    protected string $parentId = '';

    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('GROUP_ORDER')]
    protected ?string $groupOrder = null;

    /**
     *
     * @var null|\TemplateProvider\BMEcat\Node\Mime[]
     */
    #[Serializer\Expose]
    #[Serializer\SerializedName('MIME_INFO')]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\Mime>')]
    #[Serializer\XmlList(entry: 'MIME')]
    protected ?array $mimes = null;

    /**
     *
     * @var \TemplateProvider\BMEcat\Node\Keyword[]
     */
    #[Serializer\Expose]
    #[Serializer\Type('array<TemplateProvider\BMEcat\Node\Keyword>')]
    #[Serializer\XmlList(inline: true, entry: 'KEYWORD')]
    protected ?array $keywords = null;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getGroupId(): string
    {
        return $this->groupId;
    }

    public function setGroupId(string $groupId): void
    {
        $this->groupId = $groupId;
    }

    public function getGroupName(): string
    {
        return $this->groupName;
    }

    public function setGroupName(string $groupName): void
    {
        $this->groupName = $groupName;
    }

    public function getGroupDescription(): ?string
    {
        return $this->groupDescription;
    }

    public function setGroupDescription(?string $groupDescription): void
    {
        $this->groupDescription = $groupDescription;
    }

    public function getParentId(): string
    {
        return $this->parentId;
    }

    public function setParentId(string $parentId): void
    {
        $this->parentId = $parentId;
    }

    public function getGroupOrder(): ?string
    {
        return $this->groupOrder;
    }

    public function setGroupOrder(?string $groupOrder): void
    {
        $this->groupOrder = $groupOrder;
    }

    public function getMimes(): ?array
    {
        return $this->mimes;
    }

    public function setMimes(?array $mimes): void
    {
        $this->mimes = $mimes;
    }

    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    public function setKeywords(?array $keywords): void
    {
        $this->keywords = $keywords;
    }
}
