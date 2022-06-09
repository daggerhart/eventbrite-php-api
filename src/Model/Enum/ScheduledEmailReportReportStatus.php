<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static ACTIVE_(): string
 * @method static INACTIVE_(): string
 * @method static DELETED_(): string
 */
final class ScheduledEmailReportReportStatus extends \MyCLabs\Enum\Enum
{
    private const ACTIVE_ = 'active.';
    private const INACTIVE_ = 'inactive.';
    private const DELETED_ = 'deleted.';
}
