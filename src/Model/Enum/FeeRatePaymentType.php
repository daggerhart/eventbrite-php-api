<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static ANY(): string
 * @method static EVENTBRITE(): string
 * @method static AUTHNET(): string
 * @method static MONERIS(): string
 * @method static PAYPAL(): string
 * @method static GOOGLE(): string
 * @method static MANUAL(): string
 * @method static FREE(): string
 * @method static OFFLINE(): string
 * @method static CASH(): string
 * @method static CHECK(): string
 * @method static INVOICE(): string
 */
final class FeeRatePaymentType extends \MyCLabs\Enum\Enum
{
    private const ANY = 'any';
    private const EVENTBRITE = 'eventbrite';
    private const AUTHNET = 'authnet';
    private const MONERIS = 'moneris';
    private const PAYPAL = 'paypal';
    private const GOOGLE = 'google';
    private const MANUAL = 'manual';
    private const FREE = 'free';
    private const OFFLINE = 'offline';
    private const CASH = 'cash';
    private const CHECK = 'check';
    private const INVOICE = 'invoice';
}
