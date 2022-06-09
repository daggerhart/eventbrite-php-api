<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EventSimilarities extends \Eventbrite\Model\ModelBase
{
    /**
     * The event id.
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * The title of the event.
     *
     * @var string|null
     */
    public ?string $event_title;

    /**
     * The similarity score.
     *
     * @var int|null
     */
    public ?int $similarity_scores;

}
