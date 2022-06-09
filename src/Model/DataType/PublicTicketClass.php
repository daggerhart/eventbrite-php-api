<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class PublicTicketClass extends \Eventbrite\Model\ModelBase
{
    /**
     * Description of the ticket
     *
     * @var string|null
     */
    public ?string $description;

    /**
     * Is this a donation? (user-supplied cost)
     *
     * @var bool|null
     */
    public ?bool $donation;

    /**
     * Is this a free ticket?
     *
     * @var bool|null
     */
    public ?bool $free;

    /**
     * Minimum number per order
     *
     * @var int|null
     */
    public ?int $minimum_quantity;

    /**
     * Maximum number per order (blank uses default value)
     *
     * @var int|null
     */
    public ?int $maximum_quantity;

    /**
     * A list of the available delivery methods for this ticket class
     *
     * @var array|null
     */
    public ?array $delivery_methods;

    /**
     * Cost of the ticket (currently currency must match event currency) e.g. $45 would be "USD,4500"
     *
     * @var \Eventbrite\Model\DataType\TicketClassCost|null
     */
    public ?\Eventbrite\Model\DataType\TicketClassCost $cost;

    /**
     * Is an absolute URL to the API endpoint that will return you ticket class.
     *
     * @var string|null
     */
    public ?string $resource_uri;

    /**
     * Image ID for this ticket class. null if no image is set.
     *
     * @var string|null
     */
    public ?string $image_id;

}
