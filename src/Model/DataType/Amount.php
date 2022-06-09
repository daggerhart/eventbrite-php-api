<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Amount extends \Eventbrite\Model\ModelBase
{
    /**
     * The ISO 4217 3-character code of a currency
     *
     * @var string|null
     */
    public ?string $currency;

    /**
     * The integer value of units of the minor unit of the currency (e.g. cents for US dollars)
     *
     * @var int|null
     */
    public ?int $value;

}
