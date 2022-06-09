<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Performer extends \Eventbrite\Model\ModelBase
{
    /**
     * Id of the performer.
     *
     * @var int|null
     */
    public ?int $id;

    /**
     * Performer's name. Defaults to the artist's name if not provided.
     *
     * @var string|null
     */
    public ?string $display_name;

    /**
     * Performer's role. It enables to distinguish between a headliner (main) or supporting acts.
     *
     * @var \Eventbrite\Model\Enum\PerformerRole|null
     */
    public ?\Eventbrite\Model\Enum\PerformerRole $role;

    /**
     * Order within the event. Ascendant. Between 0-127. If needed, the `id` is the tiebreaker. Default: `0`.
     *
     * @var int|null
     */
    public ?int $sort_order;

    /**
     * The artist that will be performing.
     *
     * @var string|null
     */
    public ?string $artist_id;

    /**
     * Performer's visibility.
     *
     * @var bool|null
     */
    public ?bool $hidden;

    /**
     * The artist's representation.
     *
     * @var string|null
     */
    public ?string $artist_extended_data_id;

}
