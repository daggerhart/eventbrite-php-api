<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static DEFAULT(): string
 * @method static CANONICAL(): string
 * @method static CUSTOM(): string
 */
final class TextOverridesResponseContentMessageType extends \MyCLabs\Enum\Enum
{
    private const DEFAULT = 'default';
    private const CANONICAL = 'canonical';
    private const CUSTOM = 'custom';
}
