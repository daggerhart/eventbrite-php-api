<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class PaymentConstraint extends \Eventbrite\Model\DataType\PaymentConstraintCreate
{
    /**
     * Payment Constraint ID
     *
     * @var string|null
     */
    public ?string $id;

}
