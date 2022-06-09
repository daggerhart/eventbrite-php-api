<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static ANY(): string
 * @method static PACKAGE1(): string
 * @method static PACKAGE2(): string
 */
final class FeeRatePlan extends \MyCLabs\Enum\Enum
{
    private const ANY = 'any';
    private const PACKAGE1 = 'package1';
    private const PACKAGE2 = 'package2';
}
