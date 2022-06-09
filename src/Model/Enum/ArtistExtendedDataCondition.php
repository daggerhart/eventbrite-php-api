<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static CANONICAL(): string
 * @method static CUSTOM(): string
 * @method static CUSTOMIZED(): string
 */
final class ArtistExtendedDataCondition extends \MyCLabs\Enum\Enum
{
    private const CANONICAL = 'canonical';
    private const CUSTOM = 'custom';
    private const CUSTOMIZED = 'customized';
}
