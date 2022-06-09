<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Contact extends \Eventbrite\Model\ModelBase
{
    /**
     * The contact’s name. Use this in preference to first_name/last_name if possible for forward compatability with non-Western names.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The contact’s first name
     *
     * @var string|null
     */
    public ?string $first_name;

    /**
     * The contact’s last name
     *
     * @var string|null
     */
    public ?string $last_name;

    /**
     * The contact’s email address
     *
     * @var string|null
     */
    public ?string $email;

    /**
     * When this contact was created
     *
     * @var string|null
     */
    public ?string $created;

}
