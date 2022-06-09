<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Question extends \Eventbrite\Model\ModelBase
{
    /**
     * The ID of the custom question
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The label of the custom question
     *
     * @var string|null
     */
    public ?string $label;

    /**
     * One of text, url, email, date, number, address, or dropdown
     *
     * @var \Eventbrite\Model\Enum\QuestionType|null
     */
    public ?\Eventbrite\Model\Enum\QuestionType $type;

    /**
     * Whether or not an answer is required
     *
     * @var bool|null
     */
    public ?bool $required;

}
