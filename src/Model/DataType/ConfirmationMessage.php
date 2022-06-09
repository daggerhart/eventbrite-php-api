<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ConfirmationMessage extends \Eventbrite\Model\ModelBase
{
    /**
     * @var string|null
     */
    public ?string $html;

    /**
     * @var string|null
     */
    public ?string $text;

}
