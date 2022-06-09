<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class QuestionChoicesCreate extends \Eventbrite\Model\ModelBase
{
    /**
     * @var array|null
     */
    public ?array $answer;

    /**
     * @var int|null
     */
    public ?int $quantity_available;

}
