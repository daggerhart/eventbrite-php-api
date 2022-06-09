<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class LocalDatetime extends \Eventbrite\Model\ModelBase
{
    /**
     * The time in the timezone of the event
     *
     * @var string|null
     */
    public ?string $local;

}
