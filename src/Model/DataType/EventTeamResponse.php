<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventTeamResponse extends \Eventbrite\Model\ModelBase
{
    /**
     * Team ID
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * Team name
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * @var array|null
     */
    public ?array $creator;

    /**
     * Date when the team information was last changed
     *
     * @var string|null
     */
    public ?string $changed;

    /**
     * Date when the team was created
     *
     * @var string|null
     */
    public ?string $created;

    /**
     * How many attendees the team have
     *
     * @var int|null
     */
    public ?int $attendee_count;

    /**
     * Token
     *
     * @var string|null
     */
    public ?string $token;

    /**
     * The ID of the event this team is part of
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * When the attendee joined the team
     *
     * @var string|null
     */
    public ?string $date_joined;

}
