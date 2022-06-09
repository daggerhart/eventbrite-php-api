<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class FeeRate extends \Eventbrite\Model\ModelBase
{
    /**
     * FeeRate rule fixed value.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $fixed;

    /**
     * FeeRate rule maximum amount (Cap). Null means unlimited.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $maximum;

    /**
     * FeeRate rule minimum amount. Null means that there isn’t any minimum.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $minimum;

    /**
     * The (ISO 3166 alpha-2 code of the) country.
     *
     * @var string|null
     */
    public ?string $country;

    /**
     * The (ISO 4217 3-character code of the) currency.
     *
     * @var string|null
     */
    public ?string $currency;

    /**
     * Name of the fee.
     *
     * @var \Eventbrite\Model\Enum\FeeRateFeeNamePaymentFee|null
     */
    public ?\Eventbrite\Model\Enum\FeeRateFeeNamePaymentFee $fee_name;

    /**
     * The assortment package name to get the price for. ‘any’ means that applies to all the prossible variants.
     *
     * @var \Eventbrite\Model\Enum\FeeRatePlan|null
     */
    public ?\Eventbrite\Model\Enum\FeeRatePlan $plan;

    /**
     * the payment type to get the price for. If it’s not provided, or the value is ‘any’, all the existing variants will be returned.
     *
     * @var \Eventbrite\Model\Enum\FeeRatePaymentType|null
     */
    public ?\Eventbrite\Model\Enum\FeeRatePaymentType $payment_type;

    /**
     * the item type for which get the price fee rates. If it’s not provided, or the value is ‘any’, all the existing variants will be returned.
     *
     * @var \Eventbrite\Model\Enum\FeeRateChannel|null
     */
    public ?\Eventbrite\Model\Enum\FeeRateChannel $channel;

    /**
     * the item type for which get the price fee rates. ‘any’ means that applies to all the possible variants.
     *
     * @var \Eventbrite\Model\Enum\FeeRateItemType|null
     */
    public ?\Eventbrite\Model\Enum\FeeRateItemType $item_type;

    /**
     * FeeRate rule percent. Minimum value is ‘0’, maximum value is ‘100’. Supports two decimals.
     *
     * @var string|null
     */
    public ?string $percent;

}
