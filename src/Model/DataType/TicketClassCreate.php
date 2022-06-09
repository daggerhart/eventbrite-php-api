<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TicketClassCreate extends \Eventbrite\Model\DataType\TicketClass
{
    /**
     * Cost of the ticket (currently currency must match event currency) e.g. $45 would be "USD,4500"
     *
     * @var string|null
     */
    public ?string $cost;

    /**
     * Name of this ticket type
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Description of the ticket
     *
     * @var string|null
     */
    public ?string $description;

    /**
     * Unsigned integer in the order ticket classes are sorted by.
     *
     * @var int|null
     */
    public ?int $sorting;

    /**
     * Total available number of this ticket, required for non-donation and non-tiered ticket classes. For normal ticket, null or 0 is not allowed. For donation ticket, null or 0 means unlimited. For tiered inventory ticket, null or 0 means capacity is only limited by tier capacity and/or event capacity.
     *
     * @var int|null
     */
    public ?int $capacity;

    /**
     * Deprecated, use `capacity` instead.
     *
     * @var int|null
     */
    public ?int $quantity_total;

    /**
     * Is this a donation? (user-supplied cost)
     *
     * @var bool|null
     */
    public ?bool $donation;

    /**
     * Is this a free ticket?
     *
     * @var bool|null
     */
    public ?bool $free;

    /**
     * Absorb the fee into the displayed cost
     *
     * @var bool|null
     */
    public ?bool $include_fee;

    /**
     * Absorb the payment fee, but show the eventbrite fee
     *
     * @var bool|null
     */
    public ?bool $split_fee;

    /**
     * Hide the ticket description on the event page
     *
     * @var bool|null
     */
    public ?bool $hide_description;

    /**
     * A list of all supported sales channels ([“online”], [“online”, “atd”], [“atd”])
     *
     * @var array|null
     */
    public ?array $sales_channels;

    /**
     * When the ticket is available for sale (leave empty for ‘when event published’)
     *
     * @var string|null
     */
    public ?string $sales_start;

    /**
     * When the ticket stops being on sale (leave empty for 'one hour before event start'). Cannot be set on series parent tickets.
     *
     * @var string|null
     */
    public ?string $sales_end;

    /**
     * Relative values used to calculate ticket sales_end. Can only be used for series parent tickets.
     *
     * @var array|null
     */
    public ?array $sales_end_relative;

    /**
     * The ID of another ticket class - when it sells out, this class will go on sale.
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
     * Hide this ticket when it is not on sale
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
     * Whether to include pdf ticket or not
     *
     * @var bool|null
     */
    public ?bool $has_pdf_ticket;

    /**
     * Hide this ticket
     *
     * @var bool|null
     */
    public ?bool $hidden;

    /**
     * Order message per ticket type
     *
     * @var string|null
     */
    public ?string $order_confirmation_message;

    /**
     * A list of the available delivery methods for this ticket class
     *
     * @var string|null
     */
    public ?string $delivery_methods;

    /**
     * Optional ID of Inventory Tier with which to associate the ticket class
     *
     * @var string|null
     */
    public ?string $inventory_tier_id;

    /**
     * @var array|null
     */
    public ?array $ticket_classes;

}
