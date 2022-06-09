<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TicketClassResponse extends \Eventbrite\Model\DataType\TicketClass
{
    /**
     * Ticket class category to which a ticket class belongs.
     *
     * @var \Eventbrite\Model\Enum\TicketClassResponseCategory|null
     */
    public ?\Eventbrite\Model\Enum\TicketClassResponseCategory $category;

}
