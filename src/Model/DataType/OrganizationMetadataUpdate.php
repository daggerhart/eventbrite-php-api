<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class OrganizationMetadataUpdate extends \Eventbrite\Model\ModelBase
{
    /**
     * The name tied to an organization.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The event URL of an organization.
     *
     * @var string|null
     */
    public ?string $events_url;

    /**
     * The logo ID of an organization.
     *
     * @var string|null
     */
    public ?string $logo_id;

    /**
     * The facebook URL of an organization.
     *
     * @var string|null
     */
    public ?string $facebook_url;

    /**
     * The instagram URL of an organization.
     *
     * @var string|null
     */
    public ?string $instagram_url;

    /**
     * The twitter URL of an organization.
     *
     * @var string|null
     */
    public ?string $twitter_url;

}
