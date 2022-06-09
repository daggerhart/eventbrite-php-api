<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static BELOW_QTY_MINIMUM(): string
 * @method static EXCEED_QTY_MAXIMUM(): string
 * @method static UNKNOWN(): string
 */
final class CheckoutDisqualificationReason extends \MyCLabs\Enum\Enum
{
    private const BELOW_QTY_MINIMUM = 'below_qty_minimum';
    private const EXCEED_QTY_MAXIMUM = 'exceed_qty_maximum';
    private const UNKNOWN = 'unknown';
}
