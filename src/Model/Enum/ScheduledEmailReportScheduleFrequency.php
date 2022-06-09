<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static DAILY(): string
 * @method static WEEKLY(): string
 * @method static MONTHLY(): string
 */
final class ScheduledEmailReportScheduleFrequency extends \MyCLabs\Enum\Enum
{
    private const DAILY = 'daily';
    private const WEEKLY = 'weekly';
    private const MONTHLY = 'monthly';
}
