<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ReportTotalsAttendees extends \Eventbrite\Model\ModelBase
{
    /**
     * Total of attendees
     *
     * @var int|null
     */
    public ?int $num_attendees;

    /**
     * Total of orders
     *
     * @var int|null
     */
    public ?int $num_orders;

}
