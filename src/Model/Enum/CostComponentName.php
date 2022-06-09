<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static EVENTBRITE_PAYMENT_FEE_V2(): string
 * @method static EVENTBRITE_SERVICE_FEE(): string
 * @method static EVENTBRITE_SHIPPING_ITEM(): string
 * @method static EVENTBRITE_SHIPPING(): string
 * @method static ROYALTY(): string
 * @method static SHIPPING(): string
 */
final class CostComponentName extends \MyCLabs\Enum\Enum
{
    private const EVENTBRITE_PAYMENT_FEE_V2 = 'eventbrite.payment_fee_v2';
    private const EVENTBRITE_SERVICE_FEE = 'eventbrite.service_fee';
    private const EVENTBRITE_SHIPPING_ITEM = 'eventbrite.shipping.item';
    private const EVENTBRITE_SHIPPING = 'eventbrite.shipping';
    private const ROYALTY = 'royalty';
    private const SHIPPING = 'shipping';
}
