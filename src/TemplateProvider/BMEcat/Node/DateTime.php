<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("DATETIME")
 */
class DateTime extends AbstractNode
{
    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     * @Serializer\XmlAttribute
     */
    protected string $type = "generation_date";

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("DATE")
     */
    protected string $date = '';

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TIME")
     */
    protected ?string $time = null;

    /**
     * @Serializer\Expose
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TIMEZONE")
     */
    protected ?string $timezone = null;

    public function setDate(string $date)
    {
        $this->date = $date;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setTime(?string $time)
    {
        $this->time = $time;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTimezone(?string $timezone)
    {
        $this->timezone = $timezone;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }
}
