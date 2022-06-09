<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static LEFT(): string
 * @method static RIGHT(): string
 * @method static CENTER(): string
 */
final class StructuredContentTextAlignment extends \MyCLabs\Enum\Enum
{
    private const LEFT = 'left';
    private const RIGHT = 'right';
    private const CENTER = 'center';
}
