<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static EVENT(): string
 * @method static EVENTBRITE(): string
 * @method static TAX(): string
 */
final class CostDetailRecipient extends \MyCLabs\Enum\Enum
{
    private const EVENT = 'event';
    private const EVENTBRITE = 'eventbrite';
    private const TAX = 'tax';
}
