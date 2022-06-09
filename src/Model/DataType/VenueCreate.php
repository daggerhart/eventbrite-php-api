<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class VenueCreate extends \Eventbrite\Model\DataType\VenueBase
{
    /**
     * The name of the venue
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The google place id for the venue
     *
     * @var string|null
     */
    public ?string $google_place_id;

    /**
     * The organizer this venue belongs to (optional - leave this off to use the default organizer)
     *
     * @var string|null
     */
    public ?string $organizer_id;

    /**
     * The venue's address
     *
     * @var \Eventbrite\Model\DataType\AddressRequest|null
     */
    public ?\Eventbrite\Model\DataType\AddressRequest $address;

}
