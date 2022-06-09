<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TicketGroup extends \Eventbrite\Model\ModelBase
{
    /**
     * Name of the ticket group. If it is greater than 20 characters will be truncated automatically.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The status of the ticket group. One of transfer, live, deleted or archived. By default is live if not specified.
     *
     * @var string|null
     */
    public ?string $status;

    /**
     * A dictionary with the event ids and ticket ids, in the form `{event_id: [ticket_id_1, ticket_id_2]}`
     *
     * @var string|null
     */
    public ?string $event_ticket_ids;

    /**
     * The list of ticket class that includes the id, event_id, sales_channels, variants and name. Simplified version of ticket_class. By default is empty, unless the tickets expansion is used.
     *
     * @var \Eventbrite\Model\DataType\TicketGroupTickets|null
     */
    public ?\Eventbrite\Model\DataType\TicketGroupTickets $tickets;

}
