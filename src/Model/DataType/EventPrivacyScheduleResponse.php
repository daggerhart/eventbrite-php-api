<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventPrivacyScheduleResponse extends \Eventbrite\Model\ModelBase
{
    /**
     * @var string|null
     */
    public ?string $id;

    /**
     * @var string|null
     */
    public ?string $schedule_date;

    /**
     * @var \Eventbrite\Model\Enum\EventPrivacyScheduleResponsePrivacyType|null
     */
    public ?\Eventbrite\Model\Enum\EventPrivacyScheduleResponsePrivacyType $privacy_type;

    /**
     * @var \Eventbrite\Model\Enum\EventPrivacyScheduleResponseStatus|null
     */
    public ?\Eventbrite\Model\Enum\EventPrivacyScheduleResponseStatus $status;

    /**
     * @var string|null
     */
    public ?string $event_id;

}
