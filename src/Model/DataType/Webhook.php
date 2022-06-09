<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Webhook extends \Eventbrite\Model\DataType\CreateWebhook
{
    /**
     * Webhook ID.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The URI of the individual Webhook.
     *
     * @var string|null
     */
    public ?string $resource_uri;

    /**
     * @var string|null
     */
    public ?string $created;

    /**
     * @var \Eventbrite\Model\Enum\CreateWebhookActions|null
     */
    public ?\Eventbrite\Model\Enum\CreateWebhookActions $actions;

    /**
     * The ID of the Organization that triggers this webhook.
     *
     * @var string|null
     */
    public ?string $user_id;

    /**
     * The Event ID that triggers this webhook. Is null for all events.
     *
     * @var string|null
     */
    public ?string $event_id;

}
