<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class User extends \Eventbrite\Model\ModelBase
{
    /**
     * Full name. Use this in preference to first_name/last_name if possible for forward compatibility with non-Western names.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * First name
     *
     * @var string|null
     */
    public ?string $first_name;

    /**
     * Last name
     *
     * @var string|null
     */
    public ?string $last_name;

    /**
     * Is this user's profile public?
     *
     * @var bool|null
     */
    public ?bool $is_public;

    /**
     * The organization image id
     *
     * @var string|null
     */
    public ?string $image_id;

    /**
     * List of User Email objects
     *
     * @var array|null
     */
    public ?array $emails;

}
