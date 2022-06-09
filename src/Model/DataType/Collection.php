<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Collection extends \Eventbrite\Model\ModelBase
{
    /**
     * The creation date/time of the collection.
     *
     * @var \Eventbrite\Model\DataType\DatetimeTzUtc|null
     */
    public ?\Eventbrite\Model\DataType\DatetimeTzUtc $created;

    /**
     * Collection ID
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * Public Organization ID
     *
     * @var string|null
     */
    public ?string $organization_id;

    /**
     * Public Organizer ID
     *
     * @var string|null
     */
    public ?string $organizer_id;

    /**
     * Image ID
     *
     * @var string|null
     */
    public ?string $image_id;

    /**
     * Collection name
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The name portion of the url path that links to the collection page on Eventbrite.
     *
     * @var string|null
     */
    public ?string $slug;

    /**
     * The relative url path that links to the collection page on Eventbrite.  Format is `/cc/{name-of-slug}-{id}`.
     *
     * @var string|null
     */
    public ?string $relative_url;

    /**
     * The absolute url that links to the collection page on Eventbrite.    Format is `{eventbrite-domain}/cc/{name-of-slug}-{id}`.
     *
     * @var string|null
     */
    public ?string $absolute_url;

    /**
     * Collection summary/description. This is a plaintext field and will have any supplied HTML removed from it. Maximum of 255 characters.
     *
     * @var string|null
     */
    public ?string $summary;

    /**
     * Status of the event
     *
     * @var \Eventbrite\Model\Enum\CollectionStatus|null
     */
    public ?\Eventbrite\Model\Enum\CollectionStatus $status;

}
