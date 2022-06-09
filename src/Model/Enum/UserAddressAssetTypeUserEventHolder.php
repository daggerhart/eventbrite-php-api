<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static USER_EVENT_HOLDER(): string
 * @method static USER_EVENT_ATTENDEE(): string
 * @method static USER_EVENT_HOLDER_AND_ATTENDEE(): string
 * @method static USER_EVENT_ATTENDEE_AND_HOLDER(): string
 * @method static USER_CLOSED(): string
 * @method static USER_PREBUYER(): string
 * @method static USER_ORGANIZATION(): string
 * @method static NEWSLETTER_SUBSCRIBER(): string
 */
final class UserAddressAssetTypeUserEventHolder extends \MyCLabs\Enum\Enum
{
    private const USER_EVENT_HOLDER = 'user_event_holder';
    private const USER_EVENT_ATTENDEE = 'user_event_attendee';
    private const USER_EVENT_HOLDER_AND_ATTENDEE = 'user_event_holder_and_attendee';
    private const USER_EVENT_ATTENDEE_AND_HOLDER = 'user_event_attendee_and_holder';
    private const USER_CLOSED = 'user_closed';
    private const USER_PREBUYER = 'user_prebuyer';
    private const USER_ORGANIZATION = 'user_organization';
    private const NEWSLETTER_SUBSCRIBER = 'newsletter_subscriber';
}
