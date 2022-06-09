<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TicketClassConfirmationSettings extends \Eventbrite\Model\ModelBase
{
    /**
     * ID of the ticket class the confirmation settings apply to.
     *
     * @var string|null
     */
    public ?string $ticket_class_id;

    /**
     * ID of the event this ticket class belongs to.
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * Confirmation message for customers who have purchased one or more of this ticket class.
     *
     * @var \Eventbrite\Model\DataType\MultipartText|null
     */
    public ?\Eventbrite\Model\DataType\MultipartText $confirmation_message;

}
