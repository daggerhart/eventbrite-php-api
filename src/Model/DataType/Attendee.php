<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Attendee extends \Eventbrite\Model\ModelBase
{
    /**
     * Attendee ID
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
     * The ticket_class that the attendee registered with
     *
     * @var string|null
     */
    public ?string $ticket_class_id;

    /**
     * The name of the ticket_class at the time of registration
     *
     * @var string|null
     */
    public ?string $ticket_class_name;

    /**
     * The attendee's basic profile information
     *
     * @var \Eventbrite\Model\DataType\AttendeeProfile|null
     */
    public ?\Eventbrite\Model\DataType\AttendeeProfile $profile;

    /**
     * The per-attendee custom questions
     *
     * @var array|null
     */
    public ?array $questions;

    /**
     * The attendee’s answers to any custom questions
     *
     * @var array|null
     */
    public ?array $answers;

    /**
     * The attendee’s entry barcode information
     *
     * @var array|null
     */
    public ?array $barcodes;

    /**
     * The attendee’s team information
     *
     * @var \Eventbrite\Model\DataType\AttendeeTeam|null
     */
    public ?\Eventbrite\Model\DataType\AttendeeTeam $team;

    /**
     * The attendee's affiliate code
     *
     * @var string|null
     */
    public ?string $affiliate;

    /**
     * If the attendee is checked in
     *
     * @var bool|null
     */
    public ?bool $checked_in;

    /**
     * If the attendee is cancelled
     *
     * @var bool|null
     */
    public ?bool $cancelled;

    /**
     * If the attendee is refunded
     *
     * @var bool|null
     */
    public ?bool $refunded;

    /**
     * Cost breakdown for this attendee
     *
     * @var \Eventbrite\Model\DataType\CostSummary|null
     */
    public ?\Eventbrite\Model\DataType\CostSummary $costs;

    /**
     * The status of the attendee (scheduled to be deprecated)
     *
     * @var string|null
     */
    public ?string $status;

    /**
     * The event id that this attendee is attending
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
     * The order id this attendee is part of
     *
     * @var string|null
     */
    public ?string $order_id;

    /**
     * Full details of the order (requires the `order` expansion)
     *
     * @var \Eventbrite\Model\DataType\Order|null
     */
    public ?\Eventbrite\Model\DataType\Order $order;

    /**
     * The guestlist id for this attendee. If this is null it means that this is not a guest.
     *
     * @var string|null
     */
    public ?string $guestlist_id;

    /**
     * The name of the person that invited the attendee. If this is null it means that this is not a guest.
     *
     * @var string|null
     */
    public ?string $invited_by;

    /**
     * The attendee’s seating assignment details if reserved seating. This can be null or omitted if no specific seating is assigned to this attendee. (requires the `assigned_unit` expansion)
     *
     * @var \Eventbrite\Model\DataType\AttendeeAssignedUnit|null
     */
    public ?\Eventbrite\Model\DataType\AttendeeAssignedUnit $assigned_unit;

    /**
     * The method of delivery that is to be used for the attendee.  This can be null.
     *
     * @var \Eventbrite\Model\Enum\AttendeeDeliveryMethod|null
     */
    public ?\Eventbrite\Model\Enum\AttendeeDeliveryMethod $delivery_method;

    /**
     * A composite id with the format T12345-D12345 where the T12345 is the ticket_class id and D12345 is the discount id applied to this attendee
     *
     * @var string|null
     */
    public ?string $variant_id;

    /**
     * Marketing communication preferences for the email address associated with this Attendee.
     *
     * @var \Eventbrite\Model\DataType\ContactListPreferences|null
     */
    public ?\Eventbrite\Model\DataType\ContactListPreferences $contact_list_preferences;

    /**
     * Object representing survey responses associated with the attendee. Keys are `question_ids` and values are the answers to those questions. Available through the use of `survey_responses` expansion.
     *
     * @var array|null
     */
    public ?array $survey_responses;

    /**
     * The resource URI
     *
     * @var string|null
     */
    public ?string $resource_uri;

}
