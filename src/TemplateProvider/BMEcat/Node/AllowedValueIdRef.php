<?php

declare(strict_types = 1);

namespace TemplateProvider\BMEcat\Node;

use JMS\Serializer\Annotation as Serializer;

#[Serializer\XmlRoot('ALLOWED_VALUE')]
class AllowedValueIdRef extends AbstractNode
{
    #[Serializer\Expose]
    #[Serializer\Type('string')]
    #[Serializer\SerializedName('ALLOWED_VALUE_ID')]
    protected ?string $order = null;
}
