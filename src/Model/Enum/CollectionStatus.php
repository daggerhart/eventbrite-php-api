<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static DRAFT(): string
 * @method static LIVE(): string
 * @method static ARCHIVED(): string
 */
final class CollectionStatus extends \MyCLabs\Enum\Enum
{
    private const DRAFT = 'draft';
    private const LIVE = 'live';
    private const ARCHIVED = 'archived';
}
