<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static LIGHT(): string
 * @method static DARK(): string
 */
final class ThemeType extends \MyCLabs\Enum\Enum
{
    private const LIGHT = 'light';
    private const DARK = 'dark';
}
