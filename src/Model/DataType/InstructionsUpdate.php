<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class InstructionsUpdate extends \Eventbrite\Model\ModelBase
{
    /**
     * Instructions to display on the ticket
     *
     * @var string|null
     */
    public ?string $html;

}
