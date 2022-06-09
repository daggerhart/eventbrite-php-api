<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class AddressRequest extends \Eventbrite\Model\ModelBase
{
    /**
     * The street/location address (part 1)
     *
     * @var string|null
     */
    public ?string $address_1;

    /**
     * The street/location address (part 2)
     *
     * @var string|null
     */
    public ?string $address_2;

    /**
     * City
     *
     * @var string|null
     */
    public ?string $city;

    /**
     * ISO 3166-2 2- or 3-character region code for the state, province, region, or district
     *
     * @var string|null
     */
    public ?string $region;

    /**
     * Postal code
     *
     * @var string|null
     */
    public ?string $postal_code;

    /**
     * ISO 3166-1 2-character international code for the country
     *
     * @var string|null
     */
    public ?string $country;

    /**
     * Latitude portion of the address coordinates
     *
     * @var string|null
     */
    public ?string $latitude;

    /**
     * Longitude portion of the address coordinates
     *
     * @var string|null
     */
    public ?string $longitude;

}
