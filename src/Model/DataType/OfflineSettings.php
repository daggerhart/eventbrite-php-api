<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class OfflineSettings extends \Eventbrite\Model\ModelBase
{
    /**
     * Set of possible values: [CASH, CHECK, INVOICE]
     *
     * @var \Eventbrite\Model\Enum\OfflineSettingsPaymentMethod|null
     */
    public ?\Eventbrite\Model\Enum\OfflineSettingsPaymentMethod $payment_method;

    /**
     * @var string|null
     */
    public ?string $instructions;

}
