<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static TEXT(): string
 * @method static ON_SALE(): string
 * @method static NOT_YET_ON_SALE(): string
 * @method static SALES_ENDED(): string
 * @method static SOLD_OUT(): string
 * @method static UNAVAILABLE(): string
 */
final class EventSalesStatusSalesStatus extends \MyCLabs\Enum\Enum
{
    private const TEXT = 'text';
    private const ON_SALE = 'on_sale';
    private const NOT_YET_ON_SALE = 'not_yet_on_sale';
    private const SALES_ENDED = 'sales_ended';
    private const SOLD_OUT = 'sold_out';
    private const UNAVAILABLE = 'unavailable';
}
