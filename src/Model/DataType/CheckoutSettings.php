<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CheckoutSettings extends \Eventbrite\Model\ModelBase
{
    /**
     * When the checkout settings object was created
     *
     * @var string|null
     */
    public ?string $created;

    /**
     * When the checkout settings object was last changed
     *
     * @var string|null
     */
    public ?string $changed;

    /**
     * The ISO 3166 alpha-2 code of the country within which these checkout settings can apply.
     *
     * @var string|null
     */
    public ?string $country_code;

    /**
     * The ISO 4217 3-character code of the currency for which these checkout settings can apply.
     *
     * @var string|null
     */
    public ?string $currency_code;

    /**
     * The checkout method to use for completing consumer payment for tickets or other goods. Set of possible values [paypal, eventbrite, authnet, offline].
     *
     * @var \Eventbrite\Model\Enum\CheckoutSettingsCheckoutMethod|null
     */
    public ?\Eventbrite\Model\Enum\CheckoutSettingsCheckoutMethod $checkout_method;

    /**
     * A container for representing additional offline payment method checkout settings.
     *
     * @var array|null
     */
    public ?array $offline_settings;

    /**
     * The merchant account user instrument ID for the checkout method. Only specify this value for PayPal and Authorize.net checkout settings.
     *
     * @var string|null
     */
    public ?string $user_instrument_vault_id;

}
