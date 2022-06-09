<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class AttendeeAddress extends \Eventbrite\Model\ModelBase
{
    /**
     * The attendee’s home address
     *
     * @var \Eventbrite\Model\DataType\Address|null
     */
    public ?\Eventbrite\Model\DataType\Address $home;

    /**
     * The attendee’s shipping address
     *
     * @var \Eventbrite\Model\DataType\Address|null
     */
    public ?\Eventbrite\Model\DataType\Address $ship;

    /**
     * The attendee’s work address
     *
     * @var \Eventbrite\Model\DataType\Address|null
     */
    public ?\Eventbrite\Model\DataType\Address $work;

    /**
     * The attendee’s billing address
     *
     * @var \Eventbrite\Model\DataType\Address|null
     */
    public ?\Eventbrite\Model\DataType\Address $bill;

}
