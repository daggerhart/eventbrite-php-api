<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class OrganizationAddressUpdate extends \Eventbrite\Model\ModelBase
{
    /**
     * The primary address of an organization.
     *
     * @var string|null
     */
    public ?string $address_1;

    /**
     * The secondary address of an organization.
     *
     * @var string|null
     */
    public ?string $address_2;

    /**
     * The city of an organization.
     *
     * @var string|null
     */
    public ?string $city;

    /**
     * The region of an organization.
     *
     * @var string|null
     */
    public ?string $region;

    /**
     * The postal code of an organization.
     *
     * @var string|null
     */
    public ?string $postal_code;

    /**
     * The country of an organization.
     *
     * @var string|null
     */
    public ?string $country;

}
