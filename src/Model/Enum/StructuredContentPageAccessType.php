<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static PRIVATE(): string
 * @method static PUBLIC(): string
 */
final class StructuredContentPageAccessType extends \MyCLabs\Enum\Enum
{
    private const PRIVATE = 'private';
    private const PUBLIC = 'public';
}
