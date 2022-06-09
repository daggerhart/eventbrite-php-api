<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CapacityTier extends \Eventbrite\Model\ModelBase
{
    /**
     * Event ID for this capacity tier
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * Number of pending tickets from event capacity, not including pending tickets from capacity holds
     *
     * @var int|null
     */
    public ?int $quantity_pending;

    /**
     * Number of sold tickets from event capacity, not including sold tickets from capacity holds
     *
     * @var int|null
     */
    public ?int $quantity_sold;

    /**
     * The number of available quantities from event capacity, not including quantity held from capacity
     *
     * @var int|null
     */
    public ?int $quantity_total;

    /**
     * Number of pending tickets from event capacity
     *
     * @var int|null
     */
    public ?int $capacity_pending;

    /**
     * Number of sold tickets from event capacity
     *
     * @var int|null
     */
    public ?int $capacity_sold;

    /**
     * Total capacity of the event
     *
     * @var int|null
     */
    public ?int $capacity_total;

    /**
     * If True, the value of capacity is a custom-set value; if False, it's a calculated value of the total of all ticket capacities.
     *
     * @var bool|null
     */
    public ?bool $capacity_is_custom;

    /**
     * List of child hold inventory tiers under this capacity tier.
     *
     * @var array|null
     */
    public ?array $holds;

}
