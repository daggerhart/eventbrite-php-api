<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static ANY(): string
 * @method static TICKET(): string
 * @method static PRODUCT(): string
 */
final class FeeRateItemType extends \MyCLabs\Enum\Enum
{
    private const ANY = 'any';
    private const TICKET = 'ticket';
    private const PRODUCT = 'product';
}
