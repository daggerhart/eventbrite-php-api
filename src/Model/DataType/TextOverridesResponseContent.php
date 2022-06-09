<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TextOverridesResponseContent extends \Eventbrite\Model\ModelBase
{
    /**
     * Text Code to override.
     *
     * @var \Eventbrite\Model\Enum\TextOverridesResponseContentTextCode|null
     */
    public ?\Eventbrite\Model\Enum\TextOverridesResponseContentTextCode $text_code;

    /**
     * Custom message associated with the text code to override.
     *
     * @var string|null
     */
    public ?string $message;

    /**
     * Default message code that will override the specified text code.
     *
     * @var \Eventbrite\Model\Enum\TextOverridesResponseContentMessageCode|null
     */
    public ?\Eventbrite\Model\Enum\TextOverridesResponseContentMessageCode $message_code;

    /**
     * default internationalized message for the specified code
     *
     * @var string|null
     */
    public ?string $default_message;

    /**
     * Type of the message returned.
     *
     * @var \Eventbrite\Model\Enum\TextOverridesResponseContentMessageType|null
     */
    public ?\Eventbrite\Model\Enum\TextOverridesResponseContentMessageType $message_type;

}
