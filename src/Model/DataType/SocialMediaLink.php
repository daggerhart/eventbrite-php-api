<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class SocialMediaLink extends \Eventbrite\Model\ModelBase
{
    /**
     * The proper url.
     *
     * @var string|null
     */
    public ?string $url;

    /**
     * @var \Eventbrite\Model\Enum\SocialMediaLinkLinkType|null
     */
    public ?\Eventbrite\Model\Enum\SocialMediaLinkLinkType $link_type;

}
