<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class AttendeeTeam extends \Eventbrite\Model\ModelBase
{
    /**
     * The team's ID
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The team's name
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * When the attendee joined the team
     *
     * @var string|null
     */
    public ?string $date_joined;

    /**
     * The event the team is part of
     *
     * @var string|null
     */
    public ?string $event_id;

}
