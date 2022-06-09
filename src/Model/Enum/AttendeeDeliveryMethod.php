<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static ELECTRONIC(): string
 * @method static WILL_CALL(): string
 * @method static STANDARD_SHIPPING(): string
 * @method static THIRD_PARTY_SHIPPING(): string
 */
final class AttendeeDeliveryMethod extends \MyCLabs\Enum\Enum
{
    private const ELECTRONIC = 'electronic';
    private const WILL_CALL = 'will_call';
    private const STANDARD_SHIPPING = 'standard_shipping';
    private const THIRD_PARTY_SHIPPING = 'third_party_shipping';
}
