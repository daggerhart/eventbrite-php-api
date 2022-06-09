<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class OrderBalances extends \Eventbrite\Model\ModelBase
{
    /**
     * Sum of completed payment amounts for associated order.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $paid;

    /**
     * Sum of pending, but not yet completed payment amounts for associated order.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $pending;

    /**
     * Balance owed to place associated order.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $balance;

}
