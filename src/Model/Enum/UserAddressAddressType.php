<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static WORK(): string
 * @method static SHIP(): string
 * @method static HOME(): string
 * @method static BILL(): string
 * @method static TAX_INVOICE(): string
 * @method static FULFILLMENT(): string
 */
final class UserAddressAddressType extends \MyCLabs\Enum\Enum
{
    private const WORK = 'work';
    private const SHIP = 'ship';
    private const HOME = 'home';
    private const BILL = 'bill';
    private const TAX_INVOICE = 'tax_invoice';
    private const FULFILLMENT = 'fulfillment';
}
