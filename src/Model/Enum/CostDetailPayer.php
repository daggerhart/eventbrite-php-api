<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static ATTENDEE(): string
 * @method static ORGANIZER(): string
 */
final class CostDetailPayer extends \MyCLabs\Enum\Enum
{
    private const ATTENDEE = 'attendee';
    private const ORGANIZER = 'organizer';
}
