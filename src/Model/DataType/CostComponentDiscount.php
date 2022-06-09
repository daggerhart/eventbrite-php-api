<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CostComponentDiscount extends \Eventbrite\Model\ModelBase
{
    /**
     * The total discount to be displayed to a specific cost component.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $amount;

    /**
     * The reason why a discount is applied to a specific cost component.
     *
     * @var string|null
     */
    public ?string $reason;

}
