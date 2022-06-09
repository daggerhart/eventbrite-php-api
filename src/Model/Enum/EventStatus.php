<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static DRAFT(): string
 * @method static LIVE(): string
 * @method static STARTED(): string
 * @method static ENDED(): string
 * @method static COMPLETED(): string
 * @method static CANCELED(): string
 */
final class EventStatus extends \MyCLabs\Enum\Enum
{
    private const DRAFT = 'draft';
    private const LIVE = 'live';
    private const STARTED = 'started';
    private const ENDED = 'ended';
    private const COMPLETED = 'completed';
    private const CANCELED = 'canceled';
}
