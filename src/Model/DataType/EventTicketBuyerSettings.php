<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventTicketBuyerSettings extends \Eventbrite\Model\ModelBase
{
    /**
     * Order confirmation message from event settings.
     *
     * @var \Eventbrite\Model\DataType\MultipartText|null
     */
    public ?\Eventbrite\Model\DataType\MultipartText $confirmation_message;

    /**
     * Instructions for the ticket buyer.
     *
     * @var \Eventbrite\Model\DataType\MultipartText|null
     */
    public ?\Eventbrite\Model\DataType\MultipartText $instructions;

    /**
     * Public id of the event these ticket buyer settings come from.
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * Are refund requests enabled for this event.
     *
     * @var bool|null
     */
    public ?bool $refund_request_enabled;

    /**
     * URL to redirect the ticket buyer to for further purchase information.
     *
     * @var string|null
     */
    public ?string $redirect_url;

    /**
     * List of confirmation messages per unique ticket class in the order.
     *
     * @var array|null
     */
    public ?array $ticket_class_confirmation_settings;

}
