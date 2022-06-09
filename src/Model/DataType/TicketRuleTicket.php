<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TicketRuleTicket extends \Eventbrite\Model\ModelBase
{
    /**
     * ID of the ticket class
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * ID of the event
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * ID of the inventory tier
     *
     * @var string|null
     */
    public ?string $inventory_tier_id;

    /**
     * Name of the inventory tier
     *
     * @var string|null
     */
    public ?string $inventory_tier_name;

    /**
     * Number of sold tickets
     *
     * @var int|null
     */
    public ?int $quantity_sold;

    /**
     * On sale status of the ticket class
     *
     * @var \Eventbrite\Model\Enum\TicketRuleTicketOnSaleStatus|null
     */
    public ?\Eventbrite\Model\Enum\TicketRuleTicketOnSaleStatus $on_sale_status;

    /**
     * Cost of the ticket class
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $cost;

}
