<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class S3EmailScheduleItemCreate extends \Eventbrite\Model\ModelBase
{
    /**
     * The name of the file to be emailed.
     *
     * @var string|null
     */
    public ?string $filename;

    /**
     * 01-31T13:00:00Z (datetime, required) - The time to send the email.
     *
     * @var string|null
     */
    public ?string $time_to_send;

    /**
     * The timezone the email was scheduled to send in.
     *
     * @var string|null
     */
    public ?string $timezone;

}
