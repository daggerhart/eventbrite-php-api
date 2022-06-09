<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TrackingBeacon extends \Eventbrite\Model\ModelBase
{
    /**
     * The id of the event where the tracking beacon will load your tracking pixel.
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * The id of the user where the tracking beacon will load this tracking pixel on all of their events.
     *
     * @var string|null
     */
    public ?string $user_id;

    /**
     * The third party id that they have given you to fire on your event page.
     *
     * @var string|null
     */
    public ?string $pixel_id;

    /**
     * The tracking pixel meta information that determines where your pixel will fire. Triggers is a dict field where we pass 4 destination as keys and additional third party data as the value of those keys.
     *
     * @var 
     */
    public $triggers;

}
