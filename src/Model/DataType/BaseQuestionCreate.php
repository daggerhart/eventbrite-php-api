<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class BaseQuestionCreate extends \Eventbrite\Model\ModelBase
{
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
     * Type of Question
     *
     * @var \Eventbrite\Model\Enum\BaseQuestionCreateType|null
     */
    public ?\Eventbrite\Model\Enum\BaseQuestionCreateType $type;

    /**
     * Ask this question to the ticket buyer or each attendee.
     *
     * @var \Eventbrite\Model\Enum\BaseQuestionCreateRespondent|null
     */
    public ?\Eventbrite\Model\Enum\BaseQuestionCreateRespondent $respondent;

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
     * Is this question displayed on order confirmation?
     *
     * @var bool|null
     */
    public ?bool $display_answer_on_order;

}
