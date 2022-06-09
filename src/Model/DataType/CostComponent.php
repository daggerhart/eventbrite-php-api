<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CostComponent extends \Eventbrite\Model\ModelBase
{
    /**
     * Indicates whether this is a price component that affects the final item price (if `False`), or just intermediate metadata (if `True`).
     *
     * @var bool|null
     */
    public ?bool $intermediate;

    /**
     * Name of the fee.
     *
     * @var \Eventbrite\Model\Enum\CostComponentName|null
     */
    public ?\Eventbrite\Model\Enum\CostComponentName $name;

    /**
     * Name of the fee within the group (organizer facing).
     *
     * @var string|null
     */
    public ?string $internal_name;

    /**
     * Display name of the fee group (attendee facing).
     *
     * @var string|null
     */
    public ?string $group_name;

    /**
     * The amount of the component represented in minor units. E.g. 725 means 7.25.
     *
     * @var int|null
     */
    public ?int $value;

    /**
     * The total discount to be displayed to a specific cost component and the reason of the discount.
     *
     * @var \Eventbrite\Model\DataType\CostComponentDiscount|null
     */
    public ?\Eventbrite\Model\DataType\CostComponentDiscount $discount;

    /**
     * Rate rule that applies to this cost component, if any.
     *
     * @var \Eventbrite\Model\DataType\CostComponentRule|null
     */
    public ?\Eventbrite\Model\DataType\CostComponentRule $rule;

    /**
     * Name of the base used to calculate the fee.
     *
     * @var \Eventbrite\Model\Enum\CostComponentBase|null
     */
    public ?\Eventbrite\Model\Enum\CostComponentBase $base;

    /**
     * The display group the cost component belongs in.
     *
     * @var \Eventbrite\Model\Enum\CostComponentBucket|null
     */
    public ?\Eventbrite\Model\Enum\CostComponentBucket $bucket;

    /**
     * Who keeps the amount of the cost component.
     *
     * @var \Eventbrite\Model\Enum\CostComponentRecipient|null
     */
    public ?\Eventbrite\Model\Enum\CostComponentRecipient $recipient;

    /**
     * Who is paying the fee, used to determine if the fee is being passed on or absorbed into the item price.
     *
     * @var \Eventbrite\Model\Enum\CostComponentPayer|null
     */
    public ?\Eventbrite\Model\Enum\CostComponentPayer $payer;

}
