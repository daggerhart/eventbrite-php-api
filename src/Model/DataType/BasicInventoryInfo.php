<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class BasicInventoryInfo extends \Eventbrite\Model\ModelBase
{
    /**
     * True if the event has 1 or more inventory tiers
     *
     * @var bool|null
     */
    public ?bool $has_inventory_tiers;

    /**
     * True if the event has 1 or more inventory tiers where count_against_event_capacity is False
     *
     * @var bool|null
     */
    public ?bool $has_add_ons;

    /**
     * True if the event has 1 or more ticket classes
     *
     * @var bool|null
     */
    public ?bool $has_ticket_classes;

    /**
     * True if the event has 1 or more ticket classes where `is_donation` is True
     *
     * @var bool|null
     */
    public ?bool $has_donations;

    /**
     * True if the event has 1 or more ticket rules
     *
     * @var bool|null
     */
    public ?bool $has_ticket_rules;

    /**
     * True if event has 1 or more admission inventory tiers
     *
     * @var bool|null
     */
    public ?bool $has_admission_tiers;

    /**
     * True if an event has any type of hold (reserved, GA section, or event capacity)
     *
     * @var bool|null
     */
    public ?bool $has_holds;

}
