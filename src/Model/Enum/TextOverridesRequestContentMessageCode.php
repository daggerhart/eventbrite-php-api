<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static TICKETS_NOT_YET_ON_SALE(): string
 * @method static TICKETS_WITH_SALES_ENDED(): string
 * @method static TICKETS_SOLD_OUT(): string
 * @method static TICKETS_UNAVAILABLE(): string
 * @method static TICKETS_AT_THE_DOOR(): string
 * @method static EVENT_CANCELLED(): string
 * @method static EVENT_POSTPONED(): string
 * @method static CHECKOUT_TITLE_TICKETS(): string
 * @method static CHECKOUT_TITLE_ADD_ONS(): string
 * @method static CHECKOUT_TITLE_DONATIONS(): string
 */
final class TextOverridesRequestContentMessageCode extends \MyCLabs\Enum\Enum
{
    private const TICKETS_NOT_YET_ON_SALE = 'tickets_not_yet_on_sale';
    private const TICKETS_WITH_SALES_ENDED = 'tickets_with_sales_ended';
    private const TICKETS_SOLD_OUT = 'tickets_sold_out';
    private const TICKETS_UNAVAILABLE = 'tickets_unavailable';
    private const TICKETS_AT_THE_DOOR = 'tickets_at_the_door';
    private const EVENT_CANCELLED = 'event_cancelled';
    private const EVENT_POSTPONED = 'event_postponed';
    private const CHECKOUT_TITLE_TICKETS = 'checkout_title_tickets';
    private const CHECKOUT_TITLE_ADD_ONS = 'checkout_title_add_ons';
    private const CHECKOUT_TITLE_DONATIONS = 'checkout_title_donations';
}
