<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CannedQuestion extends \Eventbrite\Model\ModelBase
{
    /**
     * @var string|null
     */
    public ?string $resource_uri;

    /**
     * @var string|null
     */
    public ?string $id;

    /**
     * @var array|null
     */
    public ?array $question;

    /**
     * @var string|null
     */
    public ?string $type;

    /**
     * @var bool|null
     */
    public ?bool $required;

    /**
     * is this question enabled for the purchase flow
     *
     * @var bool|null
     */
    public ?bool $include;

    /**
     * is this question editable by the organizer
     *
     * @var bool|null
     */
    public ?bool $editable;

    /**
     * @var array|null
     */
    public ?array $choices;

    /**
     * @var array|null
     */
    public ?array $ticket_classes;

    /**
     * @var string|null
     */
    public ?string $group_id;

    /**
     * @var string|null
     */
    public ?string $group_display_header;

    /**
     * @var string|null
     */
    public ?string $respondent;

    /**
     * @var string|null
     */
    public ?string $default_value;

}
