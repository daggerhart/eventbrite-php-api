<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CampaignEventUpdate extends \Eventbrite\Model\ModelBase
{
    /**
     * The ID of the campaign to add events.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * Whether or not the event should be featured.
     *
     * @var bool|null
     */
    public ?bool $featured;

}
