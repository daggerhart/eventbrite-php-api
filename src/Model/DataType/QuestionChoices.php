<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class QuestionChoices extends \Eventbrite\Model\ModelBase
{
    /**
     * @var array|null
     */
    public ?array $answer;

    /**
     * @var int|null
     */
    public ?int $quantity_available;

    /**
     * @var int|null
     */
    public ?int $quantity_sold;

    /**
     * @var int|null
     */
    public ?int $low_stock;

    /**
     * @var string|null
     */
    public ?string $id;

    /**
     * @var array|null
     */
    public ?array $subquestion_ids;

}
