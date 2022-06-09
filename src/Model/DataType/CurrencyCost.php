<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CurrencyCost extends \Eventbrite\Model\ModelBase
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

    /**
     * You can get a value in the currency's major unit - for example, dollars or pound sterling - by taking the integer value provided and shifting the decimal point left by the exponent value for that currency as defined in ISO 4217
     *
     * @var string|null
     */
    public ?string $major_value;

    /**
     * Provided for your convenience; its formatting may change depending on the locale you query the API with (for example, commas for decimal separators in European locales).
     *
     * @var string|null
     */
    public ?string $display;

}
