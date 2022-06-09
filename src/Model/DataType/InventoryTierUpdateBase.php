<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class InventoryTierUpdateBase extends \Eventbrite\Model\ModelBase
{
    /**
     * The inventory tier name
     *
     * @var string|null
     */
    public ?string $name;

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
     * The number of available quantities. Only accepted for GA tiers `(seatmap_number=0, which is default)`
     *
     * @var int|null
     */
    public ?int $quantity_total;

    /**
     * Image ID for this inventory tier. Setting this to null will remove image from this inventory tier.
     *
     * @var string|null
     */
    public ?string $image_id;

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
