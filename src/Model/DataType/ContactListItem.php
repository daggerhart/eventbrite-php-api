<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ContactListItem extends \Eventbrite\Model\ModelBase
{
    /**
     * The ID of the contact list item.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The contact information of the contact.
     *
     * @var string|null
     */
    public ?string $contact;

    /**
     * The ID of the contact list the item belongs to.
     *
     * @var string|null
     */
    public ?string $contact_list_id;

    /**
     * The name of the contact list the item belongs too.
     *
     * @var string|null
     */
    public ?string $contact_list_name;

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
     * The medium of the contact list.
     *
     * @var 
     */
    public $medium;

    /**
     * The time the item has unsubscribed (null if the item hasn't unsubscribed).
     *
     * @var string|null
     */
    public ?string $when_opted_out;

    /**
     * The deliverability status and reason of a contact list item.
     *
     * @var array|null
     */
    public ?array $deliverability;

}
