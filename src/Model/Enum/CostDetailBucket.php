<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static ITEM(): string
 * @method static FEE(): string
 * @method static SHIPPING(): string
 * @method static TAX(): string
 */
final class CostDetailBucket extends \MyCLabs\Enum\Enum
{
    private const ITEM = 'item';
    private const FEE = 'fee';
    private const SHIPPING = 'shipping';
    private const TAX = 'tax';
}
