<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Event extends \Eventbrite\Model\ModelBase
{
    /**
     * Event ID
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * Event name
     *
     * @var \Eventbrite\Model\DataType\MultipartText|null
     */
    public ?\Eventbrite\Model\DataType\MultipartText $name;

    /**
     * Event summary. This is a plaintext field and will have any supplied HTML removed from it. Maximum of 140 characters, mutually exclusive with `description`.
     *
     * @var string|null
     */
    public ?string $summary;

    /**
     * (*DEPRECATED*) Event description (contents of the event page). May be long and have significant formatting. Clients may choose to skip retrieving the event description by enabling the API switch OMIT_DESCRIPTION_FROM_EVENT_CONTAINER, which will result in the description being returned as null.
     *
     * @var \Eventbrite\Model\DataType\MultipartText|null
     */
    public ?\Eventbrite\Model\DataType\MultipartText $description;

    /**
     * Start date/time of the event
     *
     * @var \Eventbrite\Model\DataType\DatetimeTz|null
     */
    public ?\Eventbrite\Model\DataType\DatetimeTz $start;

    /**
     * End date/time of the event
     *
     * @var \Eventbrite\Model\DataType\DatetimeTz|null
     */
    public ?\Eventbrite\Model\DataType\DatetimeTz $end;

    /**
     * The URL to the event page for this event on Eventbrite
     *
     * @var string|null
     */
    public ?string $url;

    /**
     * The vanity URL to the event page for this event on Eventbrite
     *
     * @var string|null
     */
    public ?string $vanity_url;

    /**
     * When the event was created
     *
     * @var string|null
     */
    public ?string $created;

    /**
     * When the event was last changed
     *
     * @var string|null
     */
    public ?string $changed;

    /**
     * When the event was first published
     *
     * @var string|null
     */
    public ?string $published;

    /**
     * Status of the event
     *
     * @var \Eventbrite\Model\Enum\EventStatus|null
     */
    public ?\Eventbrite\Model\Enum\EventStatus $status;

    /**
     * The ISO 4217 currency code for this event
     *
     * @var string|null
     */
    public ?string $currency;

    /**
     * If this event doesn’t have a venue and is only held online
     *
     * @var bool|null
     */
    public ?bool $online_event;

    /**
     * Organization owning the event
     *
     * @var string|null
     */
    public ?string $organization_id;

    /**
     * ID of the event organizer
     *
     * @var string|null
     */
    public ?string $organizer_id;

    /**
     * Full details of the event organizer (requires the `organizer` expansion)
     *
     * @var \Eventbrite\Model\DataType\Organizer|null
     */
    public ?\Eventbrite\Model\DataType\Organizer $organizer;

    /**
     * Image ID of the event logo
     *
     * @var string|null
     */
    public ?string $logo_id;

    /**
     * Full image details for event logo (requires the `logo` expansion)
     *
     * @var \Eventbrite\Model\DataType\EventbriteImage|null
     */
    public ?\Eventbrite\Model\DataType\EventbriteImage $logo;

    /**
     * Event venue ID
     *
     * @var string|null
     */
    public ?string $venue_id;

    /**
     * Full venue details for `venue_id` (requires the `venue` expansion)
     *
     * @var \Eventbrite\Model\DataType\VenueResponse|null
     */
    public ?\Eventbrite\Model\DataType\VenueResponse $venue;

    /**
     * Event format (Expansion: `format`)
     *
     * @var string|null
     */
    public ?string $format_id;

    /**
     * Full details of the event format (requires the `format` expansion)
     *
     * @var \Eventbrite\Model\DataType\Format|null
     */
    public ?\Eventbrite\Model\DataType\Format $format;

    /**
     * Event category (Expansion: `category`)
     *
     * @var string|null
     */
    public ?string $category_id;

    /**
     * Full details of the event category (requires the `category` expansion)
     *
     * @var \Eventbrite\Model\DataType\Category|null
     */
    public ?\Eventbrite\Model\DataType\Category $category;

    /**
     * Event subcategory (Expansion: `subcategory`)
     *
     * @var string|null
     */
    public ?string $subcategory_id;

    /**
     * Full details of the event subcategory (requires the `subcategory` expansion)
     *
     * @var \Eventbrite\Model\DataType\Subcategory|null
     */
    public ?\Eventbrite\Model\DataType\Subcategory $subcategory;

    /**
     * This is an object of properties that detail dimensions of music events.
     *
     * @var \Eventbrite\Model\DataType\MusicProperties|null
     */
    public ?\Eventbrite\Model\DataType\MusicProperties $music_properties;

    /**
     * The bookmark information on the event, requires the `bookmark_info` expansion
     *
     * @var \Eventbrite\Model\DataType\BookmarkInfo|null
     */
    public ?\Eventbrite\Model\DataType\BookmarkInfo $bookmark_info;

    /**
     * (Expansion)
     *
     * @var string|null
     */
    public ?string $refund_policy;

    /**
     * Additional data about general tickets information (optional).
     *
     * @var \Eventbrite\Model\DataType\TicketAvailability|null
     */
    public ?\Eventbrite\Model\DataType\TicketAvailability $ticket_availability;

    /**
     * Is this event publicly searchable on Eventbrite?
     *
     * @var bool|null
     */
    public ?bool $listed;

    /**
     * Can this event show social sharing buttons?
     *
     * @var bool|null
     */
    public ?bool $shareable;

    /**
     * Can only people with invites see the event page?
     *
     * @var bool|null
     */
    public ?bool $invite_only;

    /**
     * Should the event page show the number of tickets left?
     *
     * @var bool|null
     */
    public ?bool $show_remaining;

    /**
     * Event password
     *
     * @var string|null
     */
    public ?string $password;

    /**
     * Maximum number of people who can attend.
     *
     * @var int|null
     */
    public ?int $capacity;

    /**
     * If True, the value of capacity is a custom-set value; if False, it's a calculated value of the total of all ticket capacities.
     *
     * @var bool|null
     */
    public ?bool $capacity_is_custom;

    /**
     * Maximum duration (in seconds) of a transaction
     *
     * @var string|null
     */
    public ?string $tx_time_limit;

    /**
     * Shows when event starts
     *
     * @var bool|null
     */
    public ?bool $hide_start_date;

    /**
     * Hide when event starts
     *
     * @var bool|null
     */
    public ?bool $hide_end_date;

    /**
     * The event Locale
     *
     * @var string|null
     */
    public ?string $locale;

    /**
     * @var bool|null
     */
    public ?bool $is_locked;

    /**
     * @var string|null
     */
    public ?string $privacy_setting;

    /**
     * true, if the Event is externally ticketed
     *
     * @var bool|null
     */
    public ?bool $is_externally_ticketed;

    /**
     * @var \Eventbrite\Model\DataType\ExternalTicketing|null
     */
    public ?\Eventbrite\Model\DataType\ExternalTicketing $external_ticketing;

    /**
     * If the event is part of a series
     *
     * @var bool|null
     */
    public ?bool $is_series;

    /**
     * If the event is part of a series and is the series parent
     *
     * @var bool|null
     */
    public ?bool $is_series_parent;

    /**
     * If the event is part of a series, this is the event id of the series parent. If the event is not part of a series, this field is omitted.
     *
     * @var string|null
     */
    public ?string $series_id;

    /**
     * If the events has been set to have reserved seatings
     *
     * @var bool|null
     */
    public ?bool $is_reserved_seating;

    /**
     * Enables to show pick a seat option
     *
     * @var bool|null
     */
    public ?bool $show_pick_a_seat;

    /**
     * Enables to show seat map thumbnail
     *
     * @var bool|null
     */
    public ?bool $show_seatmap_thumbnail;

    /**
     * For reserved seating event, if venue map thumbnail should have colors on the event page.
     *
     * @var bool|null
     */
    public ?bool $show_colors_in_seatmap_thumbnail;

    /**
     * Allows to set a free event
     *
     * @var bool|null
     */
    public ?bool $is_free;

    /**
     * Source of the event (defaults to API)
     *
     * @var string|null
     */
    public ?string $source;

    /**
     * @var string|null
     */
    public ?string $version;

    /**
     * Is an absolute URL to the API endpoint that will return you the canonical representation of the event.
     *
     * @var string|null
     */
    public ?string $resource_uri;

    /**
     * Additional data about the sales status of the event (optional).
     *
     * @var \Eventbrite\Model\DataType\EventSalesStatus|null
     */
    public ?\Eventbrite\Model\DataType\EventSalesStatus $event_sales_status;

    /**
     * Additional data about the checkout settings of the Event.
     *
     * @var \Eventbrite\Model\DataType\CheckoutSettings|null
     */
    public ?\Eventbrite\Model\DataType\CheckoutSettings $checkout_settings;

}
