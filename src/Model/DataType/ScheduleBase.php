<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ScheduleBase extends \Eventbrite\Model\ModelBase
{
    /**
     * The duration of each occurrence in seconds.
     *
     * @var int|null
     */
    public ?int $occurrence_duration;

    /**
     * The recurrence rule specifies how often the series occurrences should happen. The recurrence rule must follow the iCalendar RFC at https://tools.ietf.org/html/rfc5545#section-3.3.10. The DTSTART must always be passed in UTC.
     *
     * @var string|null
     */
    public ?string $recurrence_rule;

}
