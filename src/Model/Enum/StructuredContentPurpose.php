<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static LISTING(): string
 * @method static DIGITAL_CONTENT(): string
 */
final class StructuredContentPurpose extends \MyCLabs\Enum\Enum
{
    private const LISTING = 'listing';
    private const DIGITAL_CONTENT = 'digital_content';
}
