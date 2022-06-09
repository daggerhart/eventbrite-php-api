<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class PaymentConstraintCreate extends \Eventbrite\Model\ModelBase
{
    /**
     * Name of the payment instrument for this constraint.
     *
     * @var 
     */
    public $instrument_type;

    /**
     * granular name of the instrument type.
     *
     * @var 
     */
    public $payment_method;

}
