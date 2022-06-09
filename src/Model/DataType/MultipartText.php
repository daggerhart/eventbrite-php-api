<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class MultipartText extends \Eventbrite\Model\ModelBase
{
    /**
     * @var string|null
     */
    public ?string $text;

    /**
     * @var string|null
     */
    public ?string $html;

}
