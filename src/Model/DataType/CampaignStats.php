<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CampaignStats extends \Eventbrite\Model\ModelBase
{
    /**
     * The amount of campaigns sent.
     *
     * @var int|null
     */
    public ?int $sent;

    /**
     * The amount of campaigns delivered.
     *
     * @var int|null
     */
    public ?int $delivered;

    /**
     * The amount of campaigns opened.
     *
     * @var int|null
     */
    public ?int $open;

    /**
     * The amount of campaigns clicked on.
     *
     * @var int|null
     */
    public ?int $click;

    /**
     * The amount of contacts who've unsubscribed .
     *
     * @var int|null
     */
    public ?int $unsubscribe;

    /**
     * The amount of campaigns marked as spam.
     *
     * @var int|null
     */
    public ?int $spam;

    /**
     * The amount of campaigns that have bounced while sending.
     *
     * @var int|null
     */
    public ?int $bounce;

}
