<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static ONE(): string
 * @method static MULTIPLE(): string
 * @method static SINGLE(): string
 */
final class TicketClassForSaleResponseVariantInputType extends \MyCLabs\Enum\Enum
{
    private const ONE = 'one';
    private const MULTIPLE = 'multiple';
    private const SINGLE = 'single';
}
