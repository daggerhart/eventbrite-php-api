<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class PaymentCapability extends \Eventbrite\Model\ModelBase
{
    /**
     * @var 
     */
    public $type;

    /**
     * @var 
     */
    public $instrument_type;

    /**
     * @var array|null
     */
    public ?array $payment_methods;

    /**
     * @var string|null
     */
    public ?string $note;

    /**
     * @var array|null
     */
    public ?array $ideal_banks;

}
