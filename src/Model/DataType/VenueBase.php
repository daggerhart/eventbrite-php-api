<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class VenueBase extends \Eventbrite\Model\ModelBase
{
    /**
     * Venue name
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The age restrictions for the venue
     *
     * @var \Eventbrite\Model\Enum\VenueBaseAgeRestriction|null
     */
    public ?\Eventbrite\Model\Enum\VenueBaseAgeRestriction $age_restriction;

    /**
     * Set specific capacity (if omitted, sums ticket capacities)
     *
     * @var int|null
     */
    public ?int $capacity;

}
