<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Answer extends \Eventbrite\Model\ModelBase
{
    /**
     * The ID of the custom question
     *
     * @var string|null
     */
    public ?string $question_id;

    /**
     * The ID of the attendee
     *
     * @var string|null
     */
    public ?string $attendee_id;

    /**
     * The text of the custom question
     *
     * @var string|null
     */
    public ?string $question;

    /**
     * One of text, url, email, date, number, address, or dropdown
     *
     * @var \Eventbrite\Model\Enum\AnswerType|null
     */
    public ?\Eventbrite\Model\Enum\AnswerType $type;

    /**
     * Type varies based on the question type. Most types have a string answer, except for the following with object answers:
     *
     * @var string|null
     */
    public ?string $answer;

}
