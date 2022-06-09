<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class DatetimeTzUtc extends \Eventbrite\Model\ModelBase
{
    /**
     * The timezone
     *
     * @var string|null
     */
    public ?string $timezone;

    /**
     * The time relative to UTC
     *
     * @var string|null
     */
    public ?string $utc;

}
