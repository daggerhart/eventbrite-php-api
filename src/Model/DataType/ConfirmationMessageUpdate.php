<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ConfirmationMessageUpdate extends \Eventbrite\Model\ModelBase
{
    /**
     * Confirmation message to display on order completion
     *
     * @var string|null
     */
    public ?string $html;

}
