<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventTeamCreatorEmails extends \Eventbrite\Model\ModelBase
{
    /**
     * If the email is verified
     *
     * @var bool|null
     */
    public ?bool $verified;

    /**
     * If the email is the primary one
     *
     * @var bool|null
     */
    public ?bool $primary;

    /**
     * The creator's email address
     *
     * @var string|null
     */
    public ?string $email;

}
