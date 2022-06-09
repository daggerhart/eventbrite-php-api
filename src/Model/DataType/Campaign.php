<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Campaign extends \Eventbrite\Model\ModelBase
{
    /**
     * The ID of the campaign.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The name of the campaign.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The subject of the campaign.
     *
     * @var string|null
     */
    public ?string $subject;

    /**
     * The email reply to email for the campaign.
     *
     * @var string|null
     */
    public ?string $reply_to;

    /**
     * The name the campaign is from.
     *
     * @var string|null
     */
    public ?string $from_name;

    /**
     * The time to send the campaign.
     *
     * @var string|null
     */
    public ?string $time_to_send;

    /**
     * The medium of the campaign.
     *
     * @var 
     */
    public $medium;

    /**
     * The body message of the campaign.
     *
     * @var string|null
     */
    public ?string $body_message;

    /**
     * The ID of the campaigns template.
     *
     * @var string|null
     */
    public ?string $template_id;

    /**
     * The ID of the campaigns theme.
     *
     * @var string|null
     */
    public ?string $theme_id;

    /**
     * The ID of the campagins organization.
     *
     * @var string|null
     */
    public ?string $organization_id;

    /**
     * The ID of the campaigns organization metadata.
     *
     * @var string|null
     */
    public ?string $organization_metadata_id;

    /**
     * The ID of the campaigns creator.
     *
     * @var string|null
     */
    public ?string $creator_id;

    /**
     * Creation date of the campaign, datetime in ISO8601 UTC. Other offsets than UTC are not allowed.
     *
     * @var string|null
     */
    public ?string $created;

    /**
     * The status of the campaign.
     *
     * @var \Eventbrite\Model\Enum\CampaignStatus|null
     */
    public ?\Eventbrite\Model\Enum\CampaignStatus $status;

    /**
     * The email stats of the campaign.
     *
     * @var \Eventbrite\Model\DataType\CampaignStats|null
     */
    public ?\Eventbrite\Model\DataType\CampaignStats $stats;

}
