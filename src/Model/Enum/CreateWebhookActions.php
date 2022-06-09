<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static EVENT_CREATED_EVENT_PUBLISHED_ORDER_PLACED(): string
 * @method static ATTENDEE_CHECKED_IN(): string
 * @method static ATTENDEE_CHECKED_OUT(): string
 * @method static ATTENDEE_UPDATED(): string
 * @method static EVENT_CREATED(): string
 * @method static EVENT_PUBLISHED(): string
 * @method static EVENT_UPDATED(): string
 * @method static EVENT_UNPUBLISHED(): string
 * @method static ORDER_PLACED(): string
 * @method static ORDER_REFUNDED(): string
 * @method static ORDER_UPDATED(): string
 * @method static ORGANIZER_UPDATED(): string
 * @method static TICKET_CLASS_CREATED(): string
 * @method static TICKET_CLASS_DELETED(): string
 * @method static TICKET_CLASS_UPDATED(): string
 * @method static VENUE_UPDATED(): string
 */
final class CreateWebhookActions extends \MyCLabs\Enum\Enum
{
    private const EVENT_CREATED_EVENT_PUBLISHED_ORDER_PLACED = 'event.created,event.published,order.placed';
    private const ATTENDEE_CHECKED_IN = 'attendee.checked_in';
    private const ATTENDEE_CHECKED_OUT = 'attendee.checked_out';
    private const ATTENDEE_UPDATED = 'attendee.updated';
    private const EVENT_CREATED = 'event.created';
    private const EVENT_PUBLISHED = 'event.published';
    private const EVENT_UPDATED = 'event.updated';
    private const EVENT_UNPUBLISHED = 'event.unpublished';
    private const ORDER_PLACED = 'order.placed';
    private const ORDER_REFUNDED = 'order.refunded';
    private const ORDER_UPDATED = 'order.updated';
    private const ORGANIZER_UPDATED = 'organizer.updated';
    private const TICKET_CLASS_CREATED = 'ticket_class.created';
    private const TICKET_CLASS_DELETED = 'ticket_class.deleted';
    private const TICKET_CLASS_UPDATED = 'ticket_class.updated';
    private const VENUE_UPDATED = 'venue.updated';
}
