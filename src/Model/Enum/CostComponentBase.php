<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static ITEM_DISPLAY_INCLUDABLE(): string
 * @method static EVENTBRITE_PAYMENT_FEE(): string
 * @method static EVENTBRITE_PAYMENT_FEE_V2(): string
 * @method static EVENTBRITE_PAYMENT_FEE_V2_TAX(): string
 * @method static EVENTBRITE_SERVICE_FEE(): string
 * @method static EVENTBRITE_SERVICE_FEE_TAX(): string
 * @method static ITEM_DISPLAY_ROYALTY(): string
 * @method static ITEM_DISPLAY_ROYALTY_ESF(): string
 * @method static ITEM_DISPLAY(): string
 * @method static ITEM_NET(): string
 * @method static ITEM_SUBTOTAL(): string
 * @method static ITEM_TAX_EXCLUSIVE(): string
 * @method static ITEM_TAX_INCLUSIVE(): string
 * @method static ZERO_BASE(): string
 */
final class CostComponentBase extends \MyCLabs\Enum\Enum
{
    private const ITEM_DISPLAY_INCLUDABLE = 'item.display-includable';
    private const EVENTBRITE_PAYMENT_FEE = 'eventbrite.payment_fee';
    private const EVENTBRITE_PAYMENT_FEE_V2 = 'eventbrite.payment_fee_v2';
    private const EVENTBRITE_PAYMENT_FEE_V2_TAX = 'eventbrite.payment_fee_v2.tax';
    private const EVENTBRITE_SERVICE_FEE = 'eventbrite.service_fee';
    private const EVENTBRITE_SERVICE_FEE_TAX = 'eventbrite.service_fee.tax';
    private const ITEM_DISPLAY_ROYALTY = 'item.display_royalty';
    private const ITEM_DISPLAY_ROYALTY_ESF = 'item.display_royalty_esf';
    private const ITEM_DISPLAY = 'item.display';
    private const ITEM_NET = 'item.net';
    private const ITEM_SUBTOTAL = 'item.subtotal';
    private const ITEM_TAX_EXCLUSIVE = 'item.tax_exclusive';
    private const ITEM_TAX_INCLUSIVE = 'item.tax_inclusive';
    private const ZERO_BASE = 'zero_base';
}
