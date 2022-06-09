<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TicketClassForSaleResponse extends \Eventbrite\Model\DataType\PublicTicketClass
{
    /**
     * Pretty long name of this ticket class. For tiered inventory tickets, this includes the tier name.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * When the ticket is available for sale (leave empty for 'when event published')
     *
     * @var string|null
     */
    public ?string $sales_start;

    /**
     * When the ticket stops being on sale (leave empty for 'one hour before event start')
     *
     * @var string|null
     */
    public ?string $sales_end;

    /**
     * Absorb the fee into the displayed cost
     *
     * @var bool|null
     */
    public ?bool $include_fee;

    /**
     * The status of the ticket class can be one of "UNKNOWN", "NOT_YET_ON_SALE", "AVAILABLE", "HIDDEN", "SOLD_OUT", "UNAVAILABLE". These can change based on on/off sale dates, ticket class state, or current inventory.
     *
     * @var \Eventbrite\Model\Enum\TicketClassForSaleResponseOnSaleStatus|null
     */
    public ?\Eventbrite\Model\Enum\TicketClassForSaleResponseOnSaleStatus $on_sale_status;

    /**
     * Type of variants for this ticket, "one", "single" or "multiple". A ticket may have more than one variant. Those multiple variants may be offered to purchaser as a flat list (multiple) or a dropdown choice (single).
     *
     * @var \Eventbrite\Model\Enum\TicketClassForSaleResponseVariantInputType|null
     */
    public ?\Eventbrite\Model\Enum\TicketClassForSaleResponseVariantInputType $variant_input_type;

    /**
     * A list of ticket variants for sale.
     *
     * @var array|null
     */
    public ?array $variants;

}
