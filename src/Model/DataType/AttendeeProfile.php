<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class AttendeeProfile extends \Eventbrite\Model\ModelBase
{
    /**
     * The attendee's name. Use this in preference to first_name/last_name/etc. if possible for forward compatibility with non-Western names.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The attendee's email address
     *
     * @var string|null
     */
    public ?string $email;

    /**
     * The attendee's first name
     *
     * @var string|null
     */
    public ?string $first_name;

    /**
     * The attendee's last name
     *
     * @var string|null
     */
    public ?string $last_name;

    /**
     * The title or honoraria used in front of the name (Mr., Mrs., etc.)
     *
     * @var string|null
     */
    public ?string $prefix;

    /**
     * The suffix at the end of the name (e.g. Jr, Sr)
     *
     * @var string|null
     */
    public ?string $suffix;

    /**
     * The attendee's age
     *
     * @var int|null
     */
    public ?int $age;

    /**
     * The attendee's job title
     *
     * @var string|null
     */
    public ?string $job_title;

    /**
     * The attendee's company name
     *
     * @var string|null
     */
    public ?string $company;

    /**
     * The attendee's website address
     *
     * @var string|null
     */
    public ?string $website;

    /**
     * The attendee's blog address
     *
     * @var string|null
     */
    public ?string $blog;

    /**
     * The attendee's gender
     *
     * @var \Eventbrite\Model\Enum\AttendeeProfileGender|null
     */
    public ?\Eventbrite\Model\Enum\AttendeeProfileGender $gender;

    /**
     * The attendee's birth date
     *
     * @var string|null
     */
    public ?string $birth_date;

    /**
     * The attendee's cell/mobile phone number, as formatted by them
     *
     * @var string|null
     */
    public ?string $cell_phone;

    /**
     * The attendee's cell/mobile work phone number, as formatted by them
     *
     * @var string|null
     */
    public ?string $work_phone;

    /**
     * The attendee's basic profile information
     *
     * @var \Eventbrite\Model\DataType\AttendeeAddress|null
     */
    public ?\Eventbrite\Model\DataType\AttendeeAddress $addresses;

}
