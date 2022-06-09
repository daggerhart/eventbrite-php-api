<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Organizer extends \Eventbrite\Model\ModelBase
{
    /**
     * Organizer name.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Description of the Organizer (may be very long and contain significant formatting).
     *
     * @var \Eventbrite\Model\DataType\MultipartText|null
     */
    public ?\Eventbrite\Model\DataType\MultipartText $description;

    /**
     * Long description of the Organizer.
     *
     * @var \Eventbrite\Model\DataType\MultipartText|null
     */
    public ?\Eventbrite\Model\DataType\MultipartText $long_description;

    /**
     * Image ID of the organizer logo
     *
     * @var string|null
     */
    public ?string $logo_id;

    /**
     * Full image details for organizer logo
     *
     * @var \Eventbrite\Model\DataType\EventbriteImage|null
     */
    public ?\Eventbrite\Model\DataType\EventbriteImage $logo;

    /**
     * Is an absolute URL to the API endpoint that will return you the organizer.
     *
     * @var string|null
     */
    public ?string $resource_uri;

    /**
     * Id of the organizer
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * URL to the organizer's page on Eventbrite
     *
     * @var string|null
     */
    public ?string $url;

    /**
     * Number of past events the organizer has
     *
     * @var int|null
     */
    public ?int $num_past_events;

    /**
     * Number of upcoming events the organizer has
     *
     * @var int|null
     */
    public ?int $num_future_events;

    /**
     * Organizer's twitter handle
     *
     * @var string|null
     */
    public ?string $twitter;

    /**
     * Organizer's facebook page
     *
     * @var string|null
     */
    public ?string $facebook;

}
