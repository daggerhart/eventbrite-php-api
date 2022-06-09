<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TicketRuleBulkCreateUpdate extends \Eventbrite\Model\DataType\TicketRuleCreateUpdate
{
    /**
     * ID of the ticket rule
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * Order to display the ticket classes within the ticket rule
     *
     * @var int|null
     */
    public ?int $sort_order;

}
