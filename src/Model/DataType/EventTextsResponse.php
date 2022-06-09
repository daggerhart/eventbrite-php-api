<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventTextsResponse extends \Eventbrite\Model\ModelBase
{
    /**
     * @var string|null
     */
    public ?string $locale;

    /**
     * A dictionary with content data of the event text.
     *
     * @var \Eventbrite\Model\DataType\EventTextsContent|null
     */
    public ?\Eventbrite\Model\DataType\EventTextsContent $event_text_code;

}
