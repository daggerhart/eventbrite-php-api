<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventCopy extends \Eventbrite\Model\ModelBase
{
    /**
     * The name of the new event
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * 01-31T13:00:00Z (datetime, optional) - The start time of the new event
     *
     * @var string|null
     */
    public ?string $start_date;

    /**
     * 01-31T13:00:00Z (datetime, optional) - The end time of the new event
     *
     * @var string|null
     */
    public ?string $end_date;

    /**
     * Timezone for the new event (Olson format)
     *
     * @var string|null
     */
    public ?string $timezone;

    /**
     * The summary of the new event
     *
     * @var string|null
     */
    public ?string $summary;

}
