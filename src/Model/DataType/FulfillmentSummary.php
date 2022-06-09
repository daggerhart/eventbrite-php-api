<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class FulfillmentSummary extends \Eventbrite\Model\ModelBase
{
    /**
     * Timezone
     *
     * @var string|null
     */
    public ?string $timezone;

    /**
     * List of public events IDs
     *
     * @var array|null
     */
    public ?array $event_ids;

    /**
     * A list of topics and totals.
     *
     * @var array|null
     */
    public ?array $data;

    /**
     * an array representing a list of aggregation topics to report data on.
     *
     * @var array|null
     */
    public ?array $topics_totals;

    /**
     * @var array|null
     */
    public ?array $totals;

}
