<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class InventoryTier extends \Eventbrite\Model\DataType\InventoryTierCreate
{
    /**
     * ID of the inventory tier
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * Event ID for this inventory tier
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * Deprecated. Do not use.
     *
     * @var int|null
     */
    public ?int $quantity_held;

    /**
     * Number of sold tickets for this inventory tier
     *
     * @var int|null
     */
    public ?int $quantity_sold;

    /**
     * Number of pending tickets for this inventory tier
     *
     * @var int|null
     */
    public ?int $quantity_pending;

    /**
     * Ticket class IDs associated with this inventory tier
     *
     * @var array|null
     */
    public ?array $ticket_class_ids;

    /**
     * Total capacity of this inventory tier including quantity_total for all child hold inventory tiers.
     *
     * @var int|null
     */
    public ?int $capacity_total;

    /**
     * List of child hold inventory tiers under this inventory tier. null if not a parent tier.
     *
     * @var array|null
     */
    public ?array $holds;

}
