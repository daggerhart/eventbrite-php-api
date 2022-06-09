<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ContactListItemCreate extends \Eventbrite\Model\ModelBase
{
    /**
     * The first name of the contact list item.
     *
     * @var string|null
     */
    public ?string $first_name;

    /**
     * The last name of the contact list item.
     *
     * @var string|null
     */
    public ?string $last_name;

    /**
     * The email address of the contact list item.
     *
     * @var string|null
     */
    public ?string $contact;

}
