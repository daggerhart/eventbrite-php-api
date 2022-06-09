<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ErrorWithoutDetail extends \Eventbrite\Model\ModelBase
{
    /**
     * HTTP status code of the error.
     *
     * @var int|null
     */
    public ?int $status_code;

    /**
     * Error code.
     *
     * @var string|null
     */
    public ?string $error;

    /**
     * Detailed description of the error.
     *
     * @var string|null
     */
    public ?string $error_description;

}
