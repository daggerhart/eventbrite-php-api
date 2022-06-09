<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class DiscountBase extends \Eventbrite\Model\ModelBase
{
    /**
     * The type of discount
     *
     * @var \Eventbrite\Model\Enum\DiscountBaseType|null
     */
    public ?\Eventbrite\Model\Enum\DiscountBaseType $type;

    /**
     * Code used to activate the discount
     *
     * @var string|null
     */
    public ?string $code;

    /**
     * Fixed reduction amount. When creating access codes the default value is Null.
     *
     * @var string|null
     */
    public ?string $amount_off;

    /**
     * Percentage reduction. When creating access codes the default value is Null.
     *
     * @var string|null
     */
    public ?string $percent_off;

    /**
     * ID of the event. Only used for single event discounts
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * IDs of the ticket classes to limit discount to
     *
     * @var array|null
     */
    public ?array $ticket_class_ids;

    /**
     * Number of times the discount can be used
     *
     * @var int|null
     */
    public ?int $quantity_available;

    /**
     * Allow use from this date. A datetime represented as a string in Naive Local ISO8601 date and time format, in the timezone of the event.
     *
     * @var string|null
     */
    public ?string $start_date;

    /**
     * Allow use from this number of seconds before the event starts. Greater than 59 and multiple of 60.
     *
     * @var int|null
     */
    public ?int $start_date_relative;

    /**
     * Allow use until this date. A datetime represented as a string in Naive Local ISO8601 date and time format, in the timezone of the event.
     *
     * @var string|null
     */
    public ?string $end_date;

    /**
     * Allow use until this number of seconds before the event starts. Greater than 59 and multiple of 60.
     *
     * @var int|null
     */
    public ?int $end_date_relative;

    /**
     * ID of the ticket group
     *
     * @var string|null
     */
    public ?string $ticket_group_id;

    /**
     * List of hold IDs this discount can unlock. Null if this discount does not unlock a hold.
     *
     * @var array|null
     */
    public ?array $hold_ids;

}
