<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class InventoryTierCreate extends \Eventbrite\Model\ModelBase
{
    /**
     * The inventory tier name
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Small unique integer within each seat map that can be assigned to seats in seat map. Each seat in seat map is assigned to a small integer tier 1, 2, 3, etc. When seat map is copied to another event, this tier number also remains unchanged though tier id changes since id is unique across all events.
     *
     * @var int|null
     */
    public ?int $tier;

    /**
     * Seat map number of this inventory tier
     *
     * @var \Eventbrite\Model\Enum\InventoryTierCreateSeatmapNumber|null
     */
    public ?\Eventbrite\Model\Enum\InventoryTierCreateSeatmapNumber $seatmap_number;

    /**
     * The sort order of this inventory tier
     *
     * @var int|null
     */
    public ?int $sort_order;

    /**
     * Hex representation of tier color
     *
     * @var string|null
     */
    public ?string $color;

    /**
     * The number of available quantities
     *
     * @var int|null
     */
    public ?int $quantity_total;

    /**
     * If this inventory tier is counted against event capacity. This should be set to false for inventory tiers for add-on tickets.
     *
     * @var bool|null
     */
    public ?bool $count_against_event_capacity;

    /**
     * Image ID for this inventory tier. null if no image is set.
     *
     * @var string|null
     */
    public ?string $image_id;

}
