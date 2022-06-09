<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static VISA(): string
 * @method static MASTERCARD(): string
 * @method static AMEX(): string
 * @method static DISCOVER(): string
 * @method static NARANJA(): string
 * @method static NATIVA(): string
 * @method static MERCADO_PAGO(): string
 * @method static HIPERCARD(): string
 * @method static ELO(): string
 * @method static VISA_DEBIT(): string
 * @method static MAESTRO(): string
 * @method static TOKEN(): string
 * @method static OXXO(): string
 * @method static PAGOFACIL(): string
 * @method static RAPIPAGO(): string
 */
final class PaymentMethod extends \MyCLabs\Enum\Enum
{
    private const VISA = 'VISA';
    private const MASTERCARD = 'MASTERCARD';
    private const AMEX = 'AMEX';
    private const DISCOVER = 'DISCOVER';
    private const NARANJA = 'NARANJA';
    private const NATIVA = 'NATIVA';
    private const MERCADO_PAGO = 'MERCADO_PAGO';
    private const HIPERCARD = 'HIPERCARD';
    private const ELO = 'ELO';
    private const VISA_DEBIT = 'VISA_DEBIT';
    private const MAESTRO = 'MAESTRO';
    private const TOKEN = 'TOKEN';
    private const OXXO = 'OXXO';
    private const PAGOFACIL = 'PAGOFACIL';
    private const RAPIPAGO = 'RAPIPAGO';
}
