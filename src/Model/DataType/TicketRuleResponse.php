<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TicketRuleResponse extends \Eventbrite\Model\ModelBase
{
    /**
     * ID of the ticket rule
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * ID of the event
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * Name of the ticket rule
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Description of the ticket rule
     *
     * @var string|null
     */
    public ?string $description;

    /**
     * Is this a donation? (user-supplied cost)
     *
     * @var bool|null
     */
    public ?bool $donation;

    /**
     * Absorb the fee into the displayed cost
     *
     * @var bool|null
     */
    public ?bool $include_fee;

    /**
     * Hide the ticket description on the event page
     *
     * @var bool|null
     */
    public ?bool $hide_description;

    /**
     * When the ticket class is available for sale (leave empty for “when event published”)
     *
     * @var string|null
     */
    public ?string $sales_start;

    /**
     * When the ticket class stops being on sale (leave empty for "one hour before event start")
     *
     * @var string|null
     */
    public ?string $sales_end;

    /**
     * The ID of another ticket class - when it sells out, this ticket class will go on sale
     *
     * @var string|null
     */
    public ?string $sales_start_after;

    /**
     * Minimum number per order
     *
     * @var int|null
     */
    public ?int $minimum_quantity;

    /**
     * Maximum number per order
     *
     * @var int|null
     */
    public ?int $maximum_quantity;

    /**
     * Hide this ticket class when it is not on sale
     *
     * @var bool|null
     */
    public ?bool $auto_hide;

    /**
     * Override reveal date for auto-hide
     *
     * @var string|null
     */
    public ?string $auto_hide_before;

    /**
     * Override re-hide date for auto-hide
     *
     * @var string|null
     */
    public ?string $auto_hide_after;

    /**
     * If this ticket class is hidden manually
     *
     * @var bool|null
     */
    public ?bool $hidden;

    /**
     * If this ticket class is currently hidden as a calculated dynamic value
     *
     * @var bool|null
     */
    public ?bool $hidden_currently;

    /**
     * Hide the ticket class sale status date
     *
     * @var bool|null
     */
    public ?bool $hide_sale_dates;

    /**
     * List of ticket classes associated with the ticket rule
     *
     * @var array|null
     */
    public ?array $tickets;

    /**
     * A list of all supported sales channels
     *
     * @var array|null
     */
    public ?array $sales_channels;

    /**
     * A list of the available delivery methods for this ticket rule
     *
     * @var array|null
     */
    public ?array $delivery_methods;

    /**
     * Order to display the ticket classes within the ticket rule
     *
     * @var int|null
     */
    public ?int $sort_order;

}
