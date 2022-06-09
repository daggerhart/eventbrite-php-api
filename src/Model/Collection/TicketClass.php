<?php declare(strict_types=1);

namespace Eventbrite\Model\Collection;

/**
 * Paginated collection for \Eventbrite\Model\DataType\TicketClass.
 */
class TicketClass extends \Eventbrite\Model\PaginationCollection
{
    /**
     * Collection items.
     *
     * @var \Eventbrite\Model\DataType\TicketClass[]
     */
    protected $data = array();

}
