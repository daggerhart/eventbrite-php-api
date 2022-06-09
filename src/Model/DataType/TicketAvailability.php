<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TicketAvailability extends \Eventbrite\Model\ModelBase
{
    /**
     * Whether this event has tickets available to purchase
     *
     * @var bool|null
     */
    public ?bool $has_available_tickets;

    /**
     * A dictionary with some data of the available ticket with the minimum
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $minimum_ticket_price;

    /**
     * A dictionary with some data of the available ticket with the maximum
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $maximum_ticket_price;

    /**
     * Whether there is at least one ticket with availability
     *
     * @var bool|null
     */
    public ?bool $is_sold_out;

    /**
     * The earliest start time when a visible ticket is or will be available
     *
     * @var \Eventbrite\Model\DataType\DatetimeTz|null
     */
    public ?\Eventbrite\Model\DataType\DatetimeTz $start_sales_date;

    /**
     * @var bool|null
     */
    public ?bool $waitlist_available;

}
