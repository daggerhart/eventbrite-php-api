<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ContactListShort extends \Eventbrite\Model\ModelBase
{
    /**
     * The name of the contact list
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The user who owns this contact list
     *
     * @var string|null
     */
    public ?string $user_id;

}
