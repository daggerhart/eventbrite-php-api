<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TimedDisplay extends \Eventbrite\Model\ModelBase
{
    /**
     * UTC ISO601 string format "2019-11-30T19:00:00Z".  Start time when a module is viewable.  Either absolute_start_utc/absolute_end_utc OR relative_start/relative_end should be provided - both sets cannot be.
     *
     * @var string|null
     */
    public ?string $absolute_start_utc;

    /**
     * UTC ISO601 string format "2019-11-30T19:00:00Z".  End time when a module is viewable.  Optional - if absolute_end_utc is provided, then absolute_start_utc must be provided with it.
     *
     * @var string|null
     */
    public ?string $absolute_end_utc;

    /**
     * both sets cannot be.
     *
     * @var string|null
     */
    public ?string $relative_start;

    /**
     * @var string|null
     */
    public ?string $relative_end;

}
