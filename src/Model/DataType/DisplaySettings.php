<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class DisplaySettings extends \Eventbrite\Model\ModelBase
{
    /**
     * Whether to display the start date on the event listing
     *
     * @var bool|null
     */
    public ?bool $show_start_date;

    /**
     * Whether to display the end date on the event listing
     *
     * @var bool|null
     */
    public ?bool $show_end_date;

    /**
     * Whether to display event start and end time on the event listing
     *
     * @var bool|null
     */
    public ?bool $show_start_end_time;

    /**
     * Whether to display the event timezone on the event listing
     *
     * @var bool|null
     */
    public ?bool $show_timezone;

    /**
     * Whether to display a map to the venue on the event listing
     *
     * @var bool|null
     */
    public ?bool $show_map;

    /**
     * Whether to display the number of remaining tickets
     *
     * @var bool|null
     */
    public ?bool $show_remaining;

    /**
     * Whether to display a link to the organizer’s Facebook profile
     *
     * @var bool|null
     */
    public ?bool $show_organizer_facebook;

    /**
     * Whether to display a link to the organizer’s Twitter profile
     *
     * @var bool|null
     */
    public ?bool $show_organizer_twitter;

    /**
     * Whether to display which of the user’s Facebook friends are going
     *
     * @var bool|null
     */
    public ?bool $show_facebook_friends_going;

    /**
     * Which terminology should be used to refer to the event
     *
     * @var \Eventbrite\Model\Enum\DisplaySettingsTerminology|null
     */
    public ?\Eventbrite\Model\Enum\DisplaySettingsTerminology $terminology;

}
