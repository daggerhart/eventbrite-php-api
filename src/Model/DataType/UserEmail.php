<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class UserEmail extends \Eventbrite\Model\ModelBase
{
    /**
     * Email address
     *
     * @var string|null
     */
    public ?string $email;

    /**
     * Has this email address been verified to belong to the user?
     *
     * @var bool|null
     */
    public ?bool $verified;

}
