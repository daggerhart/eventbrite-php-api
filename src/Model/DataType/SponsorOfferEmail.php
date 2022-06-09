<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class SponsorOfferEmail extends \Eventbrite\Model\ModelBase
{
    /**
     * The ID of the offer email.
     *
     * @var string|null
     */
    public ?string $offer_id;

    /**
     * ID of the sponsor organization.
     *
     * @var string|null
     */
    public ?string $organization_id;

    /**
     * ID of the event being sponsored.
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * The ID of the user who created the email.
     *
     * @var string|null
     */
    public ?string $creator_id;

    /**
     * The ID of the emails recipient.
     *
     * @var string|null
     */
    public ?string $recipient_id;

    /**
     * Description of the type of package being offered.
     *
     * @var string|null
     */
    public ?string $package_type;

    /**
     * The ID of the package image.
     *
     * @var string|null
     */
    public ?string $package_image_id;

    /**
     * The description of your package.
     *
     * @var string|null
     */
    public ?string $package_description;

    /**
     * Net value of the offer for a creator.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $net_creator_value;

    /**
     * The reason why an offer is declined.
     *
     * @var string|null
     */
    public ?string $decline_reason;

    /**
     * The event IDs to be used as assets in offers.
     *
     * @var array|null
     */
    public ?array $sponsoring_event_ids;

    /**
     * True will only send the email to Eventbrite employees.
     *
     * @var bool|null
     */
    public ?bool $dry_run;

}
