<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static CANCELED(): string
 * @method static LIVE(): string
 * @method static STARTED(): string
 * @method static ENDED(): string
 * @method static COMPLETED(): string
 */
final class EventSeriesDateStatus extends \MyCLabs\Enum\Enum
{
    private const CANCELED = 'canceled';
    private const LIVE = 'live';
    private const STARTED = 'started';
    private const ENDED = 'ended';
    private const COMPLETED = 'completed';
}
