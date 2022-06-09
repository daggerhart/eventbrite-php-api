<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class SurveyInfoUpdate extends \Eventbrite\Model\ModelBase
{
    /**
     * Informative message to display on the registration survey page (including HTML)
     *
     * @var string|null
     */
    public ?string $html;

}
