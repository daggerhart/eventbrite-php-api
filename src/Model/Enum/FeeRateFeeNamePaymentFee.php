<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static PAYMENT_FEE(): string
 * @method static SERVICE_FEE(): string
 */
final class FeeRateFeeNamePaymentFee extends \MyCLabs\Enum\Enum
{
    private const PAYMENT_FEE = 'payment_fee';
    private const SERVICE_FEE = 'service_fee';
}
