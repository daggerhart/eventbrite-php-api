<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static CASH(): string
 * @method static CHECK(): string
 * @method static INVOICE(): string
 */
final class OfflineSettingsPaymentMethod extends \MyCLabs\Enum\Enum
{
    private const CASH = 'CASH';
    private const CHECK = 'CHECK';
    private const INVOICE = 'INVOICE';
}
