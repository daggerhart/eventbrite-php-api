<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static QUEUED(): string
 * @method static SENDING(): string
 * @method static SENT(): string
 * @method static CANCELLED(): string
 * @method static INCOMPLETE(): string
 */
final class ScheduleItemStatus extends \MyCLabs\Enum\Enum
{
    private const QUEUED = 'queued';
    private const SENDING = 'sending';
    private const SENT = 'sent';
    private const CANCELLED = 'cancelled';
    private const INCOMPLETE = 'incomplete';
}
