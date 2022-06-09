<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ReservedSeatingHoldCreate extends \Eventbrite\Model\ModelBase
{
    /**
     * Name of the hold.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Abbreviation of the hold.
     *
     * @var string|null
     */
    public ?string $abbreviation;

    /**
     * Index for sorting display.  The smaller sort_order is shown first.  If not supplied, the oldest hold is displayed first.
     *
     * @var int|null
     */
    public ?int $sort_order;

    /**
     * Hex representation of hold color if defined.  Default is black if not supplied.
     *
     * @var string|null
     */
    public ?string $color;

}
