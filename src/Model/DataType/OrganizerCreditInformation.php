<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class OrganizerCreditInformation extends \Eventbrite\Model\ModelBase
{
    /**
     * Represents the approximate total amount of money that the organizer has granted to all their attendees in concept of creator credits.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $total_initial_amount;

    /**
     * Represents the approximate total amount of money that has been already redeemed by the attendees for the organizer.
     *
     * @var \Eventbrite\Model\DataType\CurrencyCost|null
     */
    public ?\Eventbrite\Model\DataType\CurrencyCost $total_redeemed_amount;

    /**
     * Represents the approximate total amount of virtual incentives cards that at the moment still have balance greater than 0.
     *
     * @var int|null
     */
    public ?int $available_cards;

}
