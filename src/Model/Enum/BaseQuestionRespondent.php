<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static TICKET_BUYER(): string
 * @method static ATTENDEE(): string
 */
final class BaseQuestionRespondent extends \MyCLabs\Enum\Enum
{
    private const TICKET_BUYER = 'ticket_buyer';
    private const ATTENDEE = 'attendee';
}
