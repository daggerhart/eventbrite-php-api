<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static PENDING(): string
 * @method static RESOLVED(): string
 * @method static DELETED(): string
 */
final class EventPrivacyScheduleResponseStatus extends \MyCLabs\Enum\Enum
{
    private const PENDING = 'pending';
    private const RESOLVED = 'resolved';
    private const DELETED = 'deleted';
}
