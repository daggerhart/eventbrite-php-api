<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class CannedQuestionCreate extends \Eventbrite\Model\ModelBase
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
     * @var \Eventbrite\Model\Enum\CannedQuestionCreateType|null
     */
    public ?\Eventbrite\Model\Enum\CannedQuestionCreateType $type;

    /**
     * (DEPRECATED: This param will be removed from June 1, 2021, Use: Ticket Buyer Settings - Update) Ask this question to the ticket buyer or each attendee. When this value is not sent, the survey_type value of the event will not be updated.
     *
     * @var \Eventbrite\Model\Enum\CannedQuestionCreateRespondentDEPRECATED|null
     */
    public ?\Eventbrite\Model\Enum\CannedQuestionCreateRespondentDEPRECATED $respondent;

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
     * (DEPRECATED: This param will be removed from June 1, 2021, Use: Ticket Buyer Settings - Update) Tickets to which to limit this question. Format: [{“id”: “1234”}, {“id”: “4567”}]
     *
     * @var array|null
     */
    public ?array $ticket_classes;

    /**
     * ID of Parent Question (for subquestions)
     *
     * @var string|null
     */
    public ?string $parent_choice_id;

    /**
     * String value of canned_type
     *
     * @var \Eventbrite\Model\Enum\CannedQuestionCreateCannedType|null
     */
    public ?\Eventbrite\Model\Enum\CannedQuestionCreateCannedType $canned_type;

}
