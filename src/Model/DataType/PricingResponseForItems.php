<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class PricingResponseForItems extends \Eventbrite\Model\ModelBase
{
    /**
     * The part of the price that belongs to the organizer. If the ticket passes fees, it will be the same as the provided base price
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $organizer_share;

    /**
     * The sum of all fees that Eventbrite would charge.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $total_fees;

    /**
     * The sum of all taxes that would be charged for the price (Org to Attendee Tax).
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $total_taxes;

    /**
     * The final price as it would be shown on the event listing. This would always be: organizer share + total fees + total taxes.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $total_price;

}
