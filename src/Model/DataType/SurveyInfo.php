<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class SurveyInfo extends \Eventbrite\Model\ModelBase
{
    /**
     * Informative message to display on the registration survey (including HTML)
     *
     * @var string|null
     */
    public ?string $html;

    /**
     * Informative message to display on the registration survey (HTML tags stripped)
     *
     * @var string|null
     */
    public ?string $text;

}
