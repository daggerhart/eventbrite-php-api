<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CapacityTierUpdate extends \Eventbrite\Model\ModelBase
{
    /**
     * Total capacity of the event. Setting this to null will un-set the custom event capacity and is only allowed if there are no existing capacity hold inventory tiers.
     *
     * @var int|null
     */
    public ?int $capacity_total;

    /**
     * List of child hold inventory tiers under this capacity tier.
     *
     * @var array|null
     */
    public ?array $holds;

}
