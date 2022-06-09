<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static HEADLINER(): string
 * @method static SUPPORTER(): string
 */
final class PerformerRole extends \MyCLabs\Enum\Enum
{
    private const HEADLINER = 'headliner';
    private const SUPPORTER = 'supporter';
}
