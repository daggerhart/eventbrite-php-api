<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Country extends \Eventbrite\Model\ModelBase
{
    /**
     * The country identifier as defined by the ISO 3166 standard.
     *
     * @var string|null
     */
    public ?string $code;

    /**
     * The readable name of the country.
     *
     * @var string|null
     */
    public ?string $label;

}
