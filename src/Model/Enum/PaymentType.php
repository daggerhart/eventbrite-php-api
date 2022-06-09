<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static EVENTBRITE(): string
 * @method static PAYPAL(): string
 * @method static AUTHNET(): string
 * @method static OFFLINE(): string
 * @method static MANUAL(): string
 */
final class PaymentType extends \MyCLabs\Enum\Enum
{
    private const EVENTBRITE = 'EVENTBRITE';
    private const PAYPAL = 'PAYPAL';
    private const AUTHNET = 'AUTHNET';
    private const OFFLINE = 'OFFLINE';
    private const MANUAL = 'MANUAL';
}
