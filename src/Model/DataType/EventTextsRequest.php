<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventTextsRequest extends \Eventbrite\Model\ModelBase
{
    /**
     * A dictionary with content data of the event text
     *
     * @var \Eventbrite\Model\DataType\EventTextsRequestContent|null
     */
    public ?\Eventbrite\Model\DataType\EventTextsRequestContent $event_text_code;

}
