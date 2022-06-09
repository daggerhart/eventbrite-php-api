<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class BaseQuestion extends \Eventbrite\Model\ModelBase
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
     * Is an answer to this question required for registration?
     *
     * @var bool|null
     */
    public ?bool $required;

    /**
     * Is this question displayed on order confirmation?
     *
     * @var bool|null
     */
    public ?bool $display_answer_on_order;

    /**
     * Type of Question
     *
     * @var \Eventbrite\Model\Enum\BaseQuestionType|null
     */
    public ?\Eventbrite\Model\Enum\BaseQuestionType $type;

    /**
     * Ask this question to the ticket buyer or each attendee.
     *
     * @var \Eventbrite\Model\Enum\BaseQuestionRespondent|null
     */
    public ?\Eventbrite\Model\Enum\BaseQuestionRespondent $respondent;

    /**
     * Waiver content for questions of type waiver
     *
     * @var string|null
     */
    public ?string $waiver;

    /**
     * Choices for multiple choice questions. Format:[{“answer”: {“html”: “Choice goes here...”}}, {“answer”: {“html”: “Another choice goes here...”}}]
     *
     * @var array|null
     */
    public ?array $choices;

    /**
     * Tickets to which to limit this question. Format: [{“id”: “1234”}, {“id”: “4567”}]
     *
     * @var array|null
     */
    public ?array $ticket_classes;

    /**
     * ID of Parent Question (for subquestions)
     *
     * @var string|null
     */
    public ?string $parent_id;

    /**
     * ID of Parent Question Choice (for subquestions)
     *
     * @var string|null
     */
    public ?string $parent_choice_id;

    /**
     * Unsigned integer defining the order of the question in the list
     *
     * @var int|null
     */
    public ?int $sorting;

}
