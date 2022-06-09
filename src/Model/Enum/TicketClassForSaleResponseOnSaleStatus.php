<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static UNKNOWN(): string
 * @method static NOT_YET_ON_SALE(): string
 * @method static AVAILABLE(): string
 * @method static HIDDEN(): string
 * @method static SOLD_OUT(): string
 * @method static UNAVAILABLE(): string
 */
final class TicketClassForSaleResponseOnSaleStatus extends \MyCLabs\Enum\Enum
{
    private const UNKNOWN = 'UNKNOWN';
    private const NOT_YET_ON_SALE = 'NOT_YET_ON_SALE';
    private const AVAILABLE = 'AVAILABLE';
    private const HIDDEN = 'HIDDEN';
    private const SOLD_OUT = 'SOLD_OUT';
    private const UNAVAILABLE = 'UNAVAILABLE';
}
