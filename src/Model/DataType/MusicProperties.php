<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class MusicProperties extends \Eventbrite\Model\ModelBase
{
    /**
     * Minimum age requirement of event attendees.
     *
     * @var \Eventbrite\Model\Enum\MusicPropertiesAgeRestriction|null
     */
    public ?\Eventbrite\Model\Enum\MusicPropertiesAgeRestriction $age_restriction;

    /**
     * Main music event sponsor.
     *
     * @var string|null
     */
    public ?string $presented_by;

    /**
     * Time relative to UTC that the doors are opened to allow people in the day of the event. When not set the event won't have any door time set.
     *
     * @var string|null
     */
    public ?string $door_time;

}
