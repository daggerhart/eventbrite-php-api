<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ContactList extends \Eventbrite\Model\ModelBase
{
    /**
     * The ID of the contact list item.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The contact list name.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The medium type of your contact list.
     *
     * @var 
     */
    public $medium;

    /**
     * The ID of the organization the contact belongs too.
     *
     * @var string|null
     */
    public ?string $organization_id;

    /**
     * The ID of the user who created the contact list.
     *
     * @var string|null
     */
    public ?string $creator_id;

    /**
     * The amount of subscribed contacts in the list.
     *
     * @var int|null
     */
    public ?int $subscriber_count;

    /**
     * The type of the contact list e.g. purchasers.
     *
     * @var 
     */
    public $contact_list_type;

}
