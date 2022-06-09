<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Schedule extends \Eventbrite\Model\DataType\ScheduleBase
{
    /**
     * The ID of the Schedule object
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * A list containing the IDs of the series occurrences that were created by the POSTed schedule.
     *
     * @var array|null
     */
    public ?array $created_event_ids;

}
