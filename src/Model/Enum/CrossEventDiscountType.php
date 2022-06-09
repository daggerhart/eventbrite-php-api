<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static ACCESS(): string
 * @method static HOLD(): string
 * @method static CODED(): string
 * @method static PUBLIC(): string
 */
final class CrossEventDiscountType extends \MyCLabs\Enum\Enum
{
    private const ACCESS = 'access';
    private const HOLD = 'hold';
    private const CODED = 'coded';
    private const PUBLIC = 'public';
}
