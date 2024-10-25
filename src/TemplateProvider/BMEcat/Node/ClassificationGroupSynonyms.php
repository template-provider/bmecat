<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('ALLOWED_VALUES')]
class ClassificationGroupSynonyms extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type(\TemplateProvider\BMEcat\Node\Synonym::class)]
    #[Serializer\SerializedName('SYNONYM')]
    protected array $synonyms = [];

    public function getSynonyms(): array
    {
        return $this->synonyms;
    }

    public function setSynonyms(array $synonyms): void
    {
        $this->synonyms = $synonyms;
    }
}
