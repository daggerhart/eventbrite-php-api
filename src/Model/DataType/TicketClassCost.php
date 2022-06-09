<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TicketClassCost extends \Eventbrite\Model\ModelBase
{
    /**
     * The total cost for this ticket class less the fee
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $actual_cost;

    /**
     * The fee for this ticket class
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $actual_fee;

    /**
     * The display cost for the ticket
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $cost;

    /**
     * The fee that should be included in the price (0 if include_fee is false).
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $fee;

    /**
     * The ticket's base or discounted tax amount
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $tax;

}
