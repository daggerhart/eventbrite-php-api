<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ReportTotalsSales extends \Eventbrite\Model\ModelBase
{
    /**
     * ISO 4217 3-letter currency.
     *
     * @var string|null
     */
    public ?string $currency;

    /**
     * The final price
     *
     * @var int|null
     */
    public ?int $gross;

    /**
     * Price without fees, taxes and royalties
     *
     * @var int|null
     */
    public ?int $net;

    /**
     * Quantity
     *
     * @var int|null
     */
    public ?int $quantity;

    /**
     * The total amount fee
     *
     * @var int|null
     */
    public ?int $fees;

    /**
     * The total amount of royalties
     *
     * @var int|null
     */
    public ?int $royalty;

}
