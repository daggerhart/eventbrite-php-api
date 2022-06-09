<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventTextsContent extends \Eventbrite\Model\ModelBase
{
    /**
     * @var string|null
     */
    public ?string $message;

    /**
     * @var \Eventbrite\Model\Enum\EventTextsContentMessageType|null
     */
    public ?\Eventbrite\Model\Enum\EventTextsContentMessageType $message_type;

    /**
     * Message code associated to this message. Will be null if its a custom message type.
     *
     * @var \Eventbrite\Model\Enum\EventTextsContentMessageCode|null
     */
    public ?\Eventbrite\Model\Enum\EventTextsContentMessageCode $message_code;

    /**
     * default internationalized message for the specified code
     *
     * @var string|null
     */
    public ?string $default_message;

}
