<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class S3EmailScheduleItem extends \Eventbrite\Model\ModelBase
{
    /**
     * The id of the schedule item.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The name of the file to be emailed.
     *
     * @var string|null
     */
    public ?string $filename;

    /**
     * The medium of the schedule item.
     *
     * @var 
     */
    public $medium;

    /**
     * The type of the schedule item.
     *
     * @var 
     */
    public $item_type;

    /**
     * 01-31T13:00:00Z (datetime, nullable) - The time to send the email.
     *
     * @var string|null
     */
    public ?string $time_to_send;

    /**
     * 01-32T13:00:00Z (datetime, nullable) - The time the sending process started.
     *
     * @var string|null
     */
    public ?string $time_send_started;

    /**
     * 01-31T15:35:00Z (datetime, nullable) - The time the sending process completed.
     *
     * @var string|null
     */
    public ?string $time_send_completed;

    /**
     * The status of the schedule item.
     *
     * @var 
     */
    public $status;

    /**
     * The ID of the organization that the email was sent from.
     *
     * @var string|null
     */
    public ?string $organization_id;

    /**
     * The ID of the user who created the schedule item.
     *
     * @var string|null
     */
    public ?string $creator_id;

}
