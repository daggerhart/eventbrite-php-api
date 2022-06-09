<?php declare(strict_types=1);

namespace Eventbrite\Resource;

/**
 * Resource Group: Pricing
 */
class Pricings extends \Eventbrite\Model\ResourceBase
{
    /**
     * Calculate Items
     *
     * @param string $base_price
     *   The base price for the calculation.
     * @param string $country
     *   ISO 3166 2-letter country code where the event would be payed out.
     * @param array $scope
     *   The scope for which the item calculations will be made.
     * @param bool $absorb_fees
     *   If set to true, the Fees will be included in the base price provided instead of adding them on top of it. False by default.
     * @param bool $absorb_taxes
     *   If set to true, the Taxes will be included in the base price provided instead of adding them on top of it. False by default.
     * @param \Eventbrite\Model\Enum\PaymentType $payment_type
     *   The payment type used to calculate the price. If it’s not provided, eventbrite will be used by default.
     * @param string $channel
     *   Sales channel used to calculate the price. If it’s not provided, web will be used by default.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\ModelBase|\Eventbrite\Model\DataType\Error
     */
    public function postPricingCalculatePriceForItems(?string $base_price = null, ?string $country = null, ?array $scope = null, ?bool $absorb_fees = null, ?bool $absorb_taxes = null, ?\Eventbrite\Model\Enum\PaymentType $payment_type = null, ?string $channel = null, array $query = array()) {
        $query['base_price'] = $base_price;
        $query['country'] = $country;
        $query['scope'] = $scope;
        $query['absorb_fees'] = $absorb_fees;
        $query['absorb_taxes'] = $absorb_taxes;
        $query['payment_type'] = $payment_type;
        $query['channel'] = $channel;
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\ModelBase::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('POST', "/pricing/calculate_price_for_item/", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), '', '']);
    }
    
    /**
     * List Pricing
     *
     * @param string $country
     *   Filter Fee Rates by country ISO 3166 alpha-2 code.
     * @param string $currency
     *   Filter Fee Rates by currency ISO 4217 3-character code.
     * @param array $query
     *   Additional request parameters.
     *
     * @return \Eventbrite\Model\DataType\FeeRate|\Eventbrite\Model\DataType\Error
     */
    public function getPricingFeeRatesCountryCurrencyPlanPaymentTypeChannelItemType(string $country, string $currency, array $query = array()) {
        $response_types = [];
        $response_types[200] = \Eventbrite\Model\DataType\FeeRate::class;
        $response_types[400] = \Eventbrite\Model\DataType\Error::class;
        $response = $this->request('GET', "/pricing/fee_rates", $query);
        return call_user_func_array([$response_types[$response->getStatusCode()], 'createFromResponse'], [$response->getJson(), 'fee_rates', '\\Eventbrite\\Model\\DataType\\FeeRate']);
    }
    
}
