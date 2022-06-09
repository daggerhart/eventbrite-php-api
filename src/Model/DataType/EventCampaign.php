<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventCampaign extends \Eventbrite\Model\ModelBase
{
    /**
     * ID of the event associated to the campaign
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * ID of the campaign associated to the event
     *
     * @var string|null
     */
    public ?string $campaign_id;

}
