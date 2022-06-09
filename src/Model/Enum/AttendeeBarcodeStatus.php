<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static UNUSED(): string
 * @method static USED(): string
 * @method static REFUNDED(): string
 */
final class AttendeeBarcodeStatus extends \MyCLabs\Enum\Enum
{
    private const UNUSED = 'unused';
    private const USED = 'used';
    private const REFUNDED = 'refunded';
}
