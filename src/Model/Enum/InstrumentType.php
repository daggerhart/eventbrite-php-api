<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static CREDIT_CARD(): string
 * @method static NONCE_BRAINTREE(): string
 * @method static BOLETO_BANCARIO(): string
 * @method static ADYEN_POS_PAYMENT(): string
 * @method static MERCADO_PAGO_POS(): string
 * @method static BARCODE(): string
 * @method static IDEAL(): string
 * @method static PAYPAL(): string
 * @method static MAESTRO_BANCONTACT(): string
 * @method static SEPA_DIRECT_DEBIT(): string
 * @method static AFFIRM(): string
 * @method static SOFORT(): string
 * @method static USER_INSTRUMENT(): string
 */
final class InstrumentType extends \MyCLabs\Enum\Enum
{
    private const CREDIT_CARD = 'CREDIT_CARD';
    private const NONCE_BRAINTREE = 'NONCE_BRAINTREE';
    private const BOLETO_BANCARIO = 'BOLETO_BANCARIO';
    private const ADYEN_POS_PAYMENT = 'ADYEN_POS_PAYMENT';
    private const MERCADO_PAGO_POS = 'MERCADO_PAGO_POS';
    private const BARCODE = 'BARCODE';
    private const IDEAL = 'IDEAL';
    private const PAYPAL = 'PAYPAL';
    private const MAESTRO_BANCONTACT = 'MAESTRO_BANCONTACT';
    private const SEPA_DIRECT_DEBIT = 'SEPA_DIRECT_DEBIT';
    private const AFFIRM = 'AFFIRM';
    private const SOFORT = 'SOFORT';
    private const USER_INSTRUMENT = 'USER_INSTRUMENT';
}
