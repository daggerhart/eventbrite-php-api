<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static ACCESS(): string
 * @method static CODED(): string
 * @method static HOLD(): string
 * @method static PUBLIC(): string
 */
final class DiscountBaseType extends \MyCLabs\Enum\Enum
{
    private const ACCESS = 'access';
    private const CODED = 'coded';
    private const HOLD = 'hold';
    private const PUBLIC = 'public';
}
