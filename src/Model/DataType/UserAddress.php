<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class UserAddress extends \Eventbrite\Model\ModelBase
{
    /**
     * @var string|null
     */
    public ?string $address_1;

    /**
     * @var string|null
     */
    public ?string $address_2;

    /**
     * @var string|null
     */
    public ?string $city;

    /**
     * @var string|null
     */
    public ?string $region;

    /**
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
     * @var string|null
     */
    public ?string $phone;

    /**
     * Address type supported
     *
     * @var \Eventbrite\Model\Enum\UserAddressAddressType|null
     */
    public ?\Eventbrite\Model\Enum\UserAddressAddressType $address_type;

    /**
     * User type
     *
     * @var \Eventbrite\Model\Enum\UserAddressAssetTypeUserEventHolder|null
     */
    public ?\Eventbrite\Model\Enum\UserAddressAssetTypeUserEventHolder $asset_type;

}
