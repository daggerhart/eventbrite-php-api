<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class SeatMap extends \Eventbrite\Model\ModelBase
{
    /**
     * Name of this seat map
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Event ID that this seat map belongs to
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * Venue ID that this seat map belongs to
     *
     * @var string|null
     */
    public ?string $venue_id;

    /**
     * Total capacity of this seat map.   0 if capacity cannot be calculated for draft seat map.
     *
     * @var int|null
     */
    public ?int $capacity;

    /**
     * URL of a 660x660 .png image of this seat map
     *
     * @var string|null
     */
    public ?string $thumbnail_url;

}
