<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Order extends \Eventbrite\Model\ModelBase
{
    /**
     * The Id of the order
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * When the attendee was created (order placed)
     *
     * @var string|null
     */
    public ?string $created;

    /**
     * When the attendee was last changed
     *
     * @var string|null
     */
    public ?string $changed;

    /**
     * The ticket buyer’s name. Use this in preference to first_name/last_name if possible for forward compatibility with non-Western names.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The ticket buyer’s first name
     *
     * @var string|null
     */
    public ?string $first_name;

    /**
     * The ticket buyer’s last name
     *
     * @var string|null
     */
    public ?string $last_name;

    /**
     * The ticket buyer’s email address
     *
     * @var string|null
     */
    public ?string $email;

    /**
     * Cost breakdown for this order
     *
     * @var \Eventbrite\Model\DataType\Cost|null
     */
    public ?\Eventbrite\Model\DataType\Cost $costs;

    /**
     * The event id this order is against
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * Full details of the event (requires the `event` expansion)
     *
     * @var \Eventbrite\Model\DataType\Event|null
     */
    public ?\Eventbrite\Model\DataType\Event $event;

    /**
     * The list of attendees that belong to this order (requires the `attendees` expansion)
     *
     * @var array|null
     */
    public ?array $attendees;

    /**
     * The time remaining to complete this order (in seconds)
     *
     * @var int|null
     */
    public ?int $time_remaining;

    /**
     * Is an absolute URL to the API endpoint that will return you the canonical representation of the order.
     *
     * @var string|null
     */
    public ?string $resource_uri;

    /**
     * The status of the order
     *
     * @var \Eventbrite\Model\Enum\OrderStatus|null
     */
    public ?\Eventbrite\Model\Enum\OrderStatus $status;

    /**
     * Ticket settings relevant to the purchaser after the order has been processed. Included only when called with the expansion `ticket_buyer_settings`. Order must be in PLACED or UNPAID state for the ticket_buyer_settings to return any information, otherwise will be an empty object.
     *
     * @var \Eventbrite\Model\DataType\EventTicketBuyerSettings|null
     */
    public ?\Eventbrite\Model\DataType\EventTicketBuyerSettings $ticket_buyer_settings;

    /**
     * Marketing communication preferences for the email address associated with this Order.
     *
     * @var \Eventbrite\Model\DataType\ContactListPreferences|null
     */
    public ?\Eventbrite\Model\DataType\ContactListPreferences $contact_list_preferences;

    /**
     * Object representing survey responses associated with the order. Keys are `question_ids` and values are the answers to those questions. Available through the use of `survey_responses` expansion.
     *
     * @var array|null
     */
    public ?array $survey_responses;

}
