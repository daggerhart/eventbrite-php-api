<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class SalesEndedMessageUpdate extends \Eventbrite\Model\ModelBase
{
    /**
     * Message to display after ticket sales end
     *
     * @var string|null
     */
    public ?string $html;

}
