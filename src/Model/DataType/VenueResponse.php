<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class VenueResponse extends \Eventbrite\Model\DataType\VenueBase
{
    /**
     * The address of the venue
     *
     * @var \Eventbrite\Model\DataType\AddressResponse|null
     */
    public ?\Eventbrite\Model\DataType\AddressResponse $address;

    /**
     * Resource uri
     *
     * @var string|null
     */
    public ?string $resource_uri;

    /**
     * Venue ID
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * Age restriction of the venue
     *
     * @var \Eventbrite\Model\Enum\VenueBaseAgeRestriction|null
     */
    public ?\Eventbrite\Model\Enum\VenueBaseAgeRestriction $age_restriction;

    /**
     * Venue capacity
     *
     * @var int|null
     */
    public ?int $capacity;

    /**
     * Venue name
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Latitude portion of the address coordinates of the venue
     *
     * @var string|null
     */
    public ?string $latitude;

    /**
     * Longitude portion of the address coordinates of the venue
     *
     * @var string|null
     */
    public ?string $longitude;

}
