<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class OrderCostDetails extends \Eventbrite\Model\ModelBase
{
    /**
     * The sum of the item's ticket costs.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $display_price;

    /**
     * The final price of the items.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $price;

    /**
     * List with cost components grouped by the specified criteria.
     *
     * @var array|null
     */
    public ?array $cost_details;

}
