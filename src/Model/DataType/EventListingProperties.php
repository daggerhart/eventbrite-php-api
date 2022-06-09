<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventListingProperties extends \Eventbrite\Model\ModelBase
{
    /**
     * URL for the seatmap overview image (only if event is reserved)
     *
     * @var string|null
     */
    public ?string $seatmap_thumbnail_url;

    /**
     * Does the event have paid tickets?
     *
     * @var bool|null
     */
    public ?bool $is_paid;

}
