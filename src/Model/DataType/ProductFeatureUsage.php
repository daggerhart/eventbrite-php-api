<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ProductFeatureUsage extends \Eventbrite\Model\ModelBase
{
    /**
     * The id of either the Organization or the Event, depending of what was requested
     *
     * @var string|null
     */
    public ?string $entity_id;

    /**
     * The product feature name.
     *
     * @var 
     */
    public $product_feature;

    /**
     * The activation status for the feature on this event
     *
     * @var \Eventbrite\Model\Enum\ProductFeatureUsageStatus|null
     */
    public ?\Eventbrite\Model\Enum\ProductFeatureUsageStatus $status;

}
