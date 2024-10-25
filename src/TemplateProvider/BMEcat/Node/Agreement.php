<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('AGREEMENT')]
class Agreement extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('AGREEMENT_ID')]
    protected string $id = '';

    #[Serializer\Expose]
    #[Serializer\Type(\TemplateProvider\BMEcat\Node\DateTime::class)]
    #[Serializer\SerializedName('DATETIME')]
    protected ?\TemplateProvider\BMEcat\Node\DateTime $dateTimeStart = null;

    #[Serializer\Expose]
    #[Serializer\Type(\TemplateProvider\BMEcat\Node\DateTime::class)]
    #[Serializer\SerializedName('DATETIME')]
    protected ?\TemplateProvider\BMEcat\Node\DateTime $dateTimeEnd = null;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getDateTimeStart(): ?DateTime
    {
        return $this->dateTimeStart;
    }

    public function setDateTimeStart(?DateTime $dateTimeStart): void
    {
        $this->dateTimeStart = $dateTimeStart;
    }

    public function getDateTimeEnd(): ?DateTime
    {
        return $this->dateTimeEnd;
    }

    public function setDateTimeEnd(?DateTime $dateTimeEnd): void
    {
        $this->dateTimeEnd = $dateTimeEnd;
    }
}
