<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CreateWebhook extends \Eventbrite\Model\ModelBase
{
    /**
     * The URL that the webhook will send data to when triggered.
     *
     * @var string|null
     */
    public ?string $endpoint_url;

    /**
     * One or any combination of actions that will cause this webhook to be triggered.
     *
     * @var \Eventbrite\Model\Enum\CreateWebhookActions|null
     */
    public ?\Eventbrite\Model\Enum\CreateWebhookActions $actions;

    /**
     * The Event ID that triggers this webhook. Leave blank for all events.
     *
     * @var string|null
     */
    public ?string $event_id;

}
