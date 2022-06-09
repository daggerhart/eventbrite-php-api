<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CheckoutDisqualification extends \Eventbrite\Model\ModelBase
{
    /**
     * ID of the ticket class that is disqualifying a cart from completing checkout.
     *
     * @var string|null
     */
    public ?string $ticket_class_id;

    /**
     * reason this ticket class is causing the cart to be disqualified from checkout.
     *
     * @var \Eventbrite\Model\Enum\CheckoutDisqualificationReason|null
     */
    public ?\Eventbrite\Model\Enum\CheckoutDisqualificationReason $reason;

}
