<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CrossEventDiscount extends \Eventbrite\Model\ModelBase
{
    /**
     * Code used to activate discount.
     *
     * @var string|null
     */
    public ?string $code;

    /**
     * The type of discount.
     *
     * @var \Eventbrite\Model\Enum\CrossEventDiscountType|null
     */
    public ?\Eventbrite\Model\Enum\CrossEventDiscountType $type;

    /**
     * 01-01T10:00:00 (string) - The code will be usable until this date.
     *
     * @var string|null
     */
    public ?string $end_date;

    /**
     * The code will be usable until this amount of seconds before the event start.
     *
     * @var int|null
     */
    public ?int $end_date_relative;

    /**
     * A fixed amount that is applied as a discount. It doesn’t have a currency, it depends on the event’s currency from 0.01 to 99999.99. Only two decimals are allowed. Will be null for an access code.
     *
     * @var int|null
     */
    public ?int $amount_off;

    /**
     * A percentage discount that will be applied on the ticket display price during the checkout, from 1.00 to 100.00. Only two decimals are allowed. Will be null for an access code.
     *
     * @var int|null
     */
    public ?int $percent_off;

    /**
     * The number of times this discount can be used, when 0 means “unlimited”.
     *
     * @var int|null
     */
    public ?int $quantity_available;

    /**
     * The number of times the discount was used. This is a display only field, it cannot be written.
     *
     * @var int|null
     */
    public ?int $quantity_sold;

    /**
     * 01-01T10:00:00 (string) - The code will be usable since this date.
     *
     * @var string|null
     */
    public ?string $start_date;

    /**
     * The code will be usable since this amount of seconds before the event start.
     *
     * @var int|null
     */
    public ?int $start_date_relative;

    /**
     * On single event discounts, the list of IDs of tickets that are part of event_id for which this discounts applies to. If empty, means “all the tickets of the event”.
     *
     * @var array|null
     */
    public ?array $ticket_class_ids;

    /**
     * On single event discounts, the id of the Event this discount applies to. This is empty for cross event discounts.
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * On cross event discounts, it is the id of the ticket group for which the discount applies to.
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
