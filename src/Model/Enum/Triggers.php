<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static EVENT_LISTING(): string
 * @method static EVENT_REGISTER(): string
 * @method static EVENT_ORDER_CONFIRMATION(): string
 * @method static TICKET_FORM_WIDGET(): string
 */
final class Triggers extends \MyCLabs\Enum\Enum
{
    private const EVENT_LISTING = 'event_listing';
    private const EVENT_REGISTER = 'event_register';
    private const EVENT_ORDER_CONFIRMATION = 'event_order_confirmation';
    private const TICKET_FORM_WIDGET = 'ticket_form_widget';
}
