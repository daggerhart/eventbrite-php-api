<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Error extends \Eventbrite\Model\ModelBase
{
    /**
     * Description of the error
     *
     * @var string|null
     */
    public ?string $error_description;

    /**
     * @var array|null
     */
    public ?array $error_detail;

    /**
     * HTTP status code of the error
     *
     * @var int|null
     */
    public ?int $status_code;

}
