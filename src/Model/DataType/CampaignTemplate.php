<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CampaignTemplate extends \Eventbrite\Model\ModelBase
{
    /**
     * The ID of the campaign template.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The name of the campaign template.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The ID of the organization tied to a template.
     *
     * @var string|null
     */
    public ?string $organization;

    /**
     * The ID of the creator of the campaign template.
     *
     * @var string|null
     */
    public ?string $creator_id;

    /**
     * The body of a campaign template.
     *
     * @var string|null
     */
    public ?string $body;

}
