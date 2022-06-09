<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Cost extends \Eventbrite\Model\ModelBase
{
    /**
     * The organizer ticket revenue.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $base_price;

    /**
     * The item price with discounts applied.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $display_price;

    /**
     * The total amount of fees and taxes to be displayed.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $display_fee;

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

    /**
     * The total amount of taxes to be displayed.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $display_tax;

    /**
     * The item price before a discount code is applied. If no discount is applied it's the display_price.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $price_before_discount;

    /**
     * The total discount to be displayed.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $discount_amount;

    /**
     * Type of discount applied.
     *
     * @var \Eventbrite\Model\Enum\CostDiscountType|null
     */
    public ?\Eventbrite\Model\Enum\CostDiscountType $discount_type;

    /**
     * List of price costs components that belong to the fee display group.
     *
     * @var array|null
     */
    public ?array $fee_components;

    /**
     * List of price costs components that belong to the tax display group.
     *
     * @var array|null
     */
    public ?array $tax_components;

    /**
     * List of price costs components that belong to the shipping display group.
     *
     * @var array|null
     */
    public ?array $shipping_components;

    /**
     * Indicates if any of the tax_components is a gts tax.
     *
     * @var bool|null
     */
    public ?bool $has_gts_tax;

    /**
     * The name of the Organizer-to-Attendee tax that applies, if any.
     *
     * @var string|null
     */
    public ?string $tax_name;

}
