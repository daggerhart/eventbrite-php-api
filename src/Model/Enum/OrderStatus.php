<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static STARTED(): string
 * @method static PENDING(): string
 * @method static PLACED(): string
 * @method static ABANDONED(): string
 */
final class OrderStatus extends \MyCLabs\Enum\Enum
{
    private const STARTED = 'started';
    private const PENDING = 'pending';
    private const PLACED = 'placed';
    private const ABANDONED = 'abandoned';
}
