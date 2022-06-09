<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TicketClass extends \Eventbrite\Model\DataType\PublicTicketClass
{
    /**
     * Name of this ticket class.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Pretty long name of this ticket class. For tiered inventory tickets, this includes the tier name.
     *
     * @var string|null
     */
    public ?string $display_name;

    /**
     * Sorting determines the order in which ticket classes are listed during purchase flow on the event listing page. Always populated when requested by a user with proper permissions. Defaults to 0 if not supplied on creation. Values are listed in ascending order; if ticket classes have the same sorting value, they are sorted by creation date.
     *
     * @var int|null
     */
    public ?int $sorting;

    /**
     * Total capacity of this ticket. For donation ticket, null means unlimited. For tiered inventory ticket, null means capacity is only limited by tier capacity and/or event capacity.
     *
     * @var int|null
     */
    public ?int $capacity;

    /**
     * Total available number of this ticket, limited by the the smallest of event capacity, inventory tier capacity, and ticket capacity. For donation ticket, 0 means unlimited.
     *
     * @var int|null
     */
    public ?int $quantity_total;

    /**
     * The number of sold tickets.
     *
     * @var int|null
     */
    public ?int $quantity_sold;

    /**
     * When the ticket is available for sale (leave empty for 'when event published')
     *
     * @var string|null
     */
    public ?string $sales_start;

    /**
     * When the ticket stops being on sale (leave empty for 'one hour before event start')
     *
     * @var string|null
     */
    public ?string $sales_end;

    /**
     * Hide this ticket
     *
     * @var bool|null
     */
    public ?bool $hidden;

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
     * Hide the sale dates on event landing and ticket selection page
     *
     * @var bool|null
     */
    public ?bool $hide_sale_dates;

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
     * The ID of another ticket class - when it sells out, this class will go on sale.
     *
     * @var string|null
     */
    public ?string $sales_start_after;

    /**
     * Order message per ticket type
     *
     * @var string|null
     */
    public ?string $order_confirmation_message;

    /**
     * A list of all supported sales channels
     *
     * @var array|null
     */
    public ?array $sales_channels;

    /**
     * Optional ID of Inventory Tier with which to associate the ticket class
     *
     * @var string|null
     */
    public ?string $inventory_tier_id;

    /**
     * Has secondary barcode assignment enabled (for ex/ RFID)
     *
     * @var bool|null
     */
    public ?bool $secondary_assignment_enabled;

}
