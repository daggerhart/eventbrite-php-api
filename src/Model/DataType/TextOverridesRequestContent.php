<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TextOverridesRequestContent extends \Eventbrite\Model\ModelBase
{
    /**
     * Text Code to override.
     *
     * @var \Eventbrite\Model\Enum\TextOverridesRequestContentTextCode|null
     */
    public ?\Eventbrite\Model\Enum\TextOverridesRequestContentTextCode $text_code;

    /**
     * Custom message associated with the text code to override.
     *
     * @var string|null
     */
    public ?string $message;

    /**
     * Default message code that will override the specified text code.
     *
     * @var \Eventbrite\Model\Enum\TextOverridesRequestContentMessageCode|null
     */
    public ?\Eventbrite\Model\Enum\TextOverridesRequestContentMessageCode $message_code;

}
