<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static AVAILABLE(): string
 * @method static NOT_YET_ON_SALE(): string
 * @method static HIDDEN(): string
 * @method static SOLD_OUT(): string
 * @method static UNAVAILABLE(): string
 * @method static UNKNOWN(): string
 */
final class TicketRuleTicketOnSaleStatus extends \MyCLabs\Enum\Enum
{
    private const AVAILABLE = 'AVAILABLE';
    private const NOT_YET_ON_SALE = 'NOT_YET_ON_SALE';
    private const HIDDEN = 'HIDDEN';
    private const SOLD_OUT = 'SOLD_OUT';
    private const UNAVAILABLE = 'UNAVAILABLE';
    private const UNKNOWN = 'UNKNOWN';
}
