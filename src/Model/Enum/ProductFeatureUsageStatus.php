<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static DISABLED(): string
 * @method static ENABLED(): string
 * @method static ENABLED_INCOMPLETE(): string
 */
final class ProductFeatureUsageStatus extends \MyCLabs\Enum\Enum
{
    private const DISABLED = 'disabled';
    private const ENABLED = 'enabled';
    private const ENABLED_INCOMPLETE = 'enabled_incomplete';
}
