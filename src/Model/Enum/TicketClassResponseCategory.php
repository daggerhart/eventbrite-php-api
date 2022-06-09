<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static ADMISSION(): string
 * @method static ADD_ON(): string
 * @method static DONATION(): string
 */
final class TicketClassResponseCategory extends \MyCLabs\Enum\Enum
{
    private const ADMISSION = 'admission';
    private const ADD_ON = 'add_on';
    private const DONATION = 'donation';
}
