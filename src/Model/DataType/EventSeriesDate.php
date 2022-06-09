<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventSeriesDate extends \Eventbrite\Model\ModelBase
{
    /**
     * Event Series Id
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * Start date/time of the event
     *
     * @var \Eventbrite\Model\DataType\DatetimeTz|null
     */
    public ?\Eventbrite\Model\DataType\DatetimeTz $start;

    /**
     * End date/time of the event
     *
     * @var \Eventbrite\Model\DataType\DatetimeTz|null
     */
    public ?\Eventbrite\Model\DataType\DatetimeTz $end;

    /**
     * The URL to the event page for this event on Eventbrite
     *
     * @var string|null
     */
    public ?string $url;

    /**
     * Status of the event
     *
     * @var \Eventbrite\Model\Enum\EventSeriesDateStatus|null
     */
    public ?\Eventbrite\Model\Enum\EventSeriesDateStatus $status;

    /**
     * The event locale
     *
     * @var string|null
     */
    public ?string $locale;

}
