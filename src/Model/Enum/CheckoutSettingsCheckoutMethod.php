<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static PAYPAL(): string
 * @method static EVENTBRITE(): string
 * @method static AUTHNET(): string
 * @method static OFFLINE(): string
 */
final class CheckoutSettingsCheckoutMethod extends \MyCLabs\Enum\Enum
{
    private const PAYPAL = 'paypal';
    private const EVENTBRITE = 'eventbrite';
    private const AUTHNET = 'authnet';
    private const OFFLINE = 'offline';
}
