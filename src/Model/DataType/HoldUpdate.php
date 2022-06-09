<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class HoldUpdate extends \Eventbrite\Model\ModelBase
{
    /**
     * ID of the hold.  Setting this to null will create a new hold.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * Event ID for this hold.   Required when creating a new hold.
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * Name of the hold.   Required when creating a new hold.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Abbreviation of the hold if defined.
     *
     * @var string|null
     */
    public ?string $abbreviation;

    /**
     * Index for sorting display.  The smaller sort_order is shown first.
     *
     * @var int|null
     */
    public ?int $sort_order;

    /**
     * Hex representation of hold color if defined.  Default is black if not supplied when creating a new hold.
     *
     * @var string|null
     */
    public ?string $color;

    /**
     * Number of total quantity for this hold, including quantity sold/pending from this hold.  Required when creating a new general admission hold or event capacity hold.   This field is not accepted as an input for reserved seating hold.
     *
     * @var int|null
     */
    public ?int $quantity_total;

    /**
     * If this hold is to be deleted
     *
     * @var bool|null
     */
    public ?bool $is_deleted;

}
