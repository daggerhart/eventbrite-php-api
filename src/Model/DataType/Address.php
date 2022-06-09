<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Address extends \Eventbrite\Model\DataType\AddressResponse
{
    /**
     * Format of the address display localized to the address country
     *
     * @var string|null
     */
    public ?string $localized_address_display;

    /**
     * Format of the address area display localized to the address country
     *
     * @var string|null
     */
    public ?string $localized_area_display;

    /**
     * The multi-line format order of the address display localized to the address country, where each line is an item in the list
     *
     * @var array|null
     */
    public ?array $localized_multi_line_address_display;

}
