<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class UpdateExternalTicketing extends \Eventbrite\Model\ModelBase
{
    /**
     * The URL clients can follow to purchase tickets.
     *
     * @var string|null
     */
    public ?string $external_url;

    /**
     * The name of the ticketing provider.
     *
     * @var string|null
     */
    public ?string $ticketing_provider_name;

    /**
     * Whether this is a free event. Mutually exclusive with ticket price range.
     *
     * @var bool|null
     */
    public ?bool $is_free;

    /**
     * The lowest price at which tickets are being sold.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $minimum_ticket_price;

    /**
     * The highest price at which tickets are being sold.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $maximum_ticket_price;

    /**
     * When sales start.
     *
     * @var string|null
     */
    public ?string $sales_start;

    /**
     * When sales end.
     *
     * @var string|null
     */
    public ?string $sales_end;

}
