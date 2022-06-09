<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventTextsRequestContent extends \Eventbrite\Model\ModelBase
{
    /**
     * Custom message associated to the event text code we want to override.
     *
     * @var string|null
     */
    public ?string $message;

    /**
     * Default message code that will override specified event text code.
     *
     * @var \Eventbrite\Model\Enum\EventTextsRequestContentMessageCode|null
     */
    public ?\Eventbrite\Model\Enum\EventTextsRequestContentMessageCode $message_code;

}
