<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CostSummary extends \Eventbrite\Model\ModelBase
{
    /**
     * The organizer ticket revenue.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $base_price;

    /**
     * The total amount the buyer was charged.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $gross;

    /**
     * Fees taken by Eventbrite as a service fee.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $eventbrite_fee;

    /**
     * Fees taken by Eventbrite as a payment processing fee.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $payment_fee;

    /**
     * The tax collected by the organizer.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $tax;

}
