<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TicketVariantForSaleResponse extends \Eventbrite\Model\ModelBase
{
    /**
     * ID of this ticket variant.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * Ticket category to which a ticket variant belongs.
     *
     * @var \Eventbrite\Model\Enum\TicketVariantForSaleResponseCategory|null
     */
    public ?\Eventbrite\Model\Enum\TicketVariantForSaleResponseCategory $category;

    /**
    * If this value is true, this ticket variant is the primary default variant of the ticket.
    
    For public discounts, primary variant is the main "Full Price" ticket without discounts applied.   For reserved seating tiered inventory ticket, primary variant is the "Best Available" option.
    *
    * @var bool|null
    */
    public ?bool $primary;

    /**
     * Discount code or public discount name if discounted.
     *
     * @var string|null
     */
    public ?string $code;

    /**
     * Name of this ticket variant.  For a primary default variant like "Best Available" or "Full Price", name is not returned.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Pretty long name of this ticket variant.  For tiered inventory tickets, this includes the tier name.   For public discount, this includes ticket class name and discount name.
     *
     * @var string|null
     */
    public ?string $display_name;

    /**
     * Long description of this ticket variant if defined.
     *
     * @var string|null
     */
    public ?string $description;

    /**
     * whether this ticket variant is free.  for donation ticket variant, this value is false.
     *
     * @var bool|null
     */
    public ?bool $free;

    /**
     * The display cost for the variant
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $cost;

    /**
     * The total cost for the variant including fee and tax
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $total_cost;

    /**
     * The fee that should be included in the price.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $fee;

    /**
     * The variant's base or discounted tax amount.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $tax;

    /**
     * fee plus tax.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $tax_and_fee;

    /**
     * The original cost before discount is applied if this variant is discounted.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $original_cost;

    /**
     * The original total cost before discount is applied if this variant is discounted.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $original_total_cost;

    /**
     * The original fee before discount is applied if this variant is discounted.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $original_fee;

    /**
     * The original tax before discount is applied if this variant is discounted.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $original_tax;

    /**
     * The status of the ticket variant can be one of "UNKNOWN", "NOT_YET_ON_SALE", "AVAILABLE", "HIDDEN", "SOLD_OUT", "UNAVAILABLE". These can change based on on/off sale dates, ticket variant state, or current inventory.
     *
     * @var \Eventbrite\Model\Enum\TicketVariantForSaleResponseOnSaleStatus|null
     */
    public ?\Eventbrite\Model\Enum\TicketVariantForSaleResponseOnSaleStatus $on_sale_status;

    /**
     * The discounted amount if this variant is discounted.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $amount_off;

    /**
     * Percentage of discount if this variant is discounted and if discount is defined as a percentage discount.
     *
     * @var string|null
     */
    public ?string $percent_off;

    /**
     * Hex representation of tier color if a color is defined for this ticket variant.
     *
     * @var string|null
     */
    public ?string $color;

    /**
     * Image ID for this ticket varint if image is set.
     *
     * @var string|null
     */
    public ?string $image_id;

}
