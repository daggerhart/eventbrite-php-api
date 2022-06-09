<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ReportResponseAttendees extends \Eventbrite\Model\ModelBase
{
    /**
     * Timezone.
     *
     * @var string|null
     */
    public ?string $timezone;

    /**
     * List of public event IDs.
     *
     * @var array|null
     */
    public ?array $event_ids;

    /**
     * @var array|null
     */
    public ?array $data;

}
