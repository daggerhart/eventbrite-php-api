<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Region extends \Eventbrite\Model\ModelBase
{
    /**
     * The associated country code to this region.
     *
     * @var string|null
     */
    public ?string $country_code;

    /**
     * The region identifier as defined by the ISO 3166 standard.
     *
     * @var string|null
     */
    public ?string $code;

    /**
     * The readable name of the region.
     *
     * @var string|null
     */
    public ?string $label;

}
