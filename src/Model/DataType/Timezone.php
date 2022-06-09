<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Timezone extends \Eventbrite\Model\ModelBase
{
    /**
     * The timezone identifier as defined by the IANA Time Zone Database.
     *
     * @var string|null
     */
    public ?string $timezone;

    /**
     * The localized name for the timezone
     *
     * @var string|null
     */
    public ?string $label;

}
