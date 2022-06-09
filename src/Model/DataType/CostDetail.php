<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CostDetail extends \Eventbrite\Model\ModelBase
{
    /**
     * Value and currency of the fee group.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $value;

    /**
     * Display name of the fee group (attendee facing). Guaranteed to be present and non-null if the group_by array passed to the request contains group_name.
     *
     * @var string|null
     */
    public ?string $group_name;

    /**
     * Used to differentiate a fee within a group (organizer facing). Guaranteed to be present and non-null if the group_by array passed to the request contains internal_name.
     *
     * @var string|null
     */
    public ?string $internal_name;

    /**
     * Who the money should be paid to. Guaranteed to be present and non-null if the group_by array passed to the request contains recipient.
     *
     * @var \Eventbrite\Model\Enum\CostDetailRecipient|null
     */
    public ?\Eventbrite\Model\Enum\CostDetailRecipient $recipient;

    /**
     * The display group the fee belongs in. Guaranteed to be present and non-null if the group_by array passed to the request contains bucket.
     *
     * @var \Eventbrite\Model\Enum\CostDetailBucket|null
     */
    public ?\Eventbrite\Model\Enum\CostDetailBucket $bucket;

    /**
     * Who is paying the fee, used to determine if the fee is being passed on or absorbed. Guaranteed to be present and non-null if the group_by array passed to the request contains payer.
     *
     * @var \Eventbrite\Model\Enum\CostDetailPayer|null
     */
    public ?\Eventbrite\Model\Enum\CostDetailPayer $payer;

}
