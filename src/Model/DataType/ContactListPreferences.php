<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ContactListPreferences extends \Eventbrite\Model\ModelBase
{
    /**
     * Email address is in at least one contact list for Organization that owns this Event.
     *
     * @var bool|null
     */
    public ?bool $has_contact_list;

    /**
     * Email address is opt-in to receive marketing communication from the Organization that owns this Event.
     *
     * @var bool|null
     */
    public ?bool $has_opted_in;

}
