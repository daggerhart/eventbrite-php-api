<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class HoldResponse extends \Eventbrite\Model\ModelBase
{
    /**
     * ID of the hold
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * Event ID for this hold
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * Name of the hold
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Abbreviation of the hold if defined
     *
     * @var string|null
     */
    public ?string $abbreviation;

    /**
     * Index for sorting display
     *
     * @var int|null
     */
    public ?int $sort_order;

    /**
     * Hex representation of hold color if defined
     *
     * @var string|null
     */
    public ?string $color;

    /**
     * Number of sold tickets from this hold
     *
     * @var int|null
     */
    public ?int $quantity_sold;

    /**
     * Number of total quantity for this hold, including quantity sold/pending from this hold
     *
     * @var int|null
     */
    public ?int $quantity_total;

    /**
     * Number of tickets which are pending (carted, for example) for this hold
     *
     * @var int|null
     */
    public ?int $quantity_pending;

}
