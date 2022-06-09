<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventSalesStatus extends \Eventbrite\Model\ModelBase
{
    /**
     * Current sales status of the event.
     *
     * @var \Eventbrite\Model\Enum\EventSalesStatusSalesStatus|null
     */
    public ?\Eventbrite\Model\Enum\EventSalesStatusSalesStatus $sales_status;

    /**
     * The earliest start time when a visible ticket is or will be available
     *
     * @var \Eventbrite\Model\DataType\DatetimeTz|null
     */
    public ?\Eventbrite\Model\DataType\DatetimeTz $start_sales_date;

    /**
     * Custom message associated with the current event sales status.
     *
     * @var string|null
     */
    public ?string $message;

    /**
     * @var \Eventbrite\Model\Enum\EventSalesStatusMessageType|null
     */
    public ?\Eventbrite\Model\Enum\EventSalesStatusMessageType $message_type;

    /**
     * The message returned is overridden by the following event status message.
     *
     * @var \Eventbrite\Model\Enum\EventSalesStatusMessageCode|null
     */
    public ?\Eventbrite\Model\Enum\EventSalesStatusMessageCode $message_code;

}
