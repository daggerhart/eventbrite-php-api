<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventUpdate extends \Eventbrite\Model\ModelBase
{
    /**
     * Event name. Value cannot be empty nor whitespace
     *
     * @var \Eventbrite\Model\DataType\Htmltext|null
     */
    public ?\Eventbrite\Model\DataType\Htmltext $name;

    /**
     * Event summary. This is a plaintext field and will have any supplied HTML removed from it. Maximum of 140 characters, mutually exclusive with `description`, and will replace `description` if provided.
     *
     * @var string|null
     */
    public ?string $summary;

    /**
     * (*DEPRECATED*) Event description (contents of the event page). May be long and have significant formatting.  Please refer to the [event description tutorial](https://www.eventbrite.com/platform/docs/event-description) to learn about the new way to update an event description.
     *
     * @var \Eventbrite\Model\DataType\Htmltext|null
     */
    public ?\Eventbrite\Model\DataType\Htmltext $description;

    /**
     * Start date/time of the event
     *
     * @var \Eventbrite\Model\DataType\DatetimeTzUtc|null
     */
    public ?\Eventbrite\Model\DataType\DatetimeTzUtc $start;

    /**
     * End date/time of the event
     *
     * @var \Eventbrite\Model\DataType\DatetimeTzUtc|null
     */
    public ?\Eventbrite\Model\DataType\DatetimeTzUtc $end;

    /**
     * Whether the start date should be hidden
     *
     * @var bool|null
     */
    public ?bool $hide_start_date;

    /**
     * Whether the end date should be hidden
     *
     * @var bool|null
     */
    public ?bool $hide_end_date;

    /**
     * The ISO 4217 currency code for this event
     *
     * @var string|null
     */
    public ?string $currency;

    /**
     * If this event doesn't have a venue and is only held online
     *
     * @var bool|null
     */
    public ?bool $online_event;

    /**
     * ID of the event organizer
     *
     * @var string|null
     */
    public ?string $organizer_id;

    /**
     * Image ID of the event logo
     *
     * @var string|null
     */
    public ?string $logo_id;

    /**
     * Event venue ID
     *
     * @var string|null
     */
    public ?string $venue_id;

    /**
     * Event format
     *
     * @var string|null
     */
    public ?string $format_id;

    /**
     * Event category
     *
     * @var string|null
     */
    public ?string $category_id;

    /**
     * Event subcategory (US only)
     *
     * @var string|null
     */
    public ?string $subcategory_id;

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
     * If the remaining number of tickets is publicly visible on the event page
     *
     * @var bool|null
     */
    public ?bool $show_remaining;

    /**
     * Password needed to see the event in unlisted mode
     *
     * @var string|null
     */
    public ?string $password;

    /**
     * Set specific capacity (if omitted, sums ticket capacities)
     *
     * @var int|null
     */
    public ?int $capacity;

    /**
     * If the event is reserved seating
     *
     * @var bool|null
     */
    public ?bool $is_reserved_seating;

    /**
     * If the event is part of a series. This attribute is mutable only for unpublished events that are not in a series, or unpublished series parents with no occurrences.
     *
     * @var bool|null
     */
    public ?bool $is_series;

    /**
     * For reserved seating event, if attendees can pick their seats.
     *
     * @var bool|null
     */
    public ?bool $show_pick_a_seat;

    /**
     * For reserved seating event, if venue map thumbnail visible on the event page.
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
     * Source of the event (defaults to API)
     *
     * @var string|null
     */
    public ?string $source;

}
