<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TicketBuyerSettings extends \Eventbrite\Model\ModelBase
{
    /**
     * confirmation message to display on order completion
     *
     * @var \Eventbrite\Model\DataType\ConfirmationMessage|null
     */
    public ?\Eventbrite\Model\DataType\ConfirmationMessage $confirmation_message;

    /**
     * instructions to display on the ticket
     *
     * @var \Eventbrite\Model\DataType\Instructions|null
     */
    public ?\Eventbrite\Model\DataType\Instructions $instructions;

    /**
     * @var string|null
     */
    public ?string $event_id;

    /**
     * represents whether refund requests are accepted for the event
     *
     * @var bool|null
     */
    public ?bool $refund_request_enabled;

    /**
     * the url to redirect post-purchase. Will overwrite confirmation message.
     *
     * @var string|null
     */
    public ?string $redirect_url;

    /**
     * message to display after ticket sales end
     *
     * @var \Eventbrite\Model\DataType\SalesEndedMessage|null
     */
    public ?\Eventbrite\Model\DataType\SalesEndedMessage $sales_ended_message;

    /**
     * whether attendees are allowed to update information after registration
     *
     * @var bool|null
     */
    public ?bool $allow_attendee_update;

    /**
     * Name/Title of the registration survey page
     *
     * @var string|null
     */
    public ?string $survey_name;

    /**
     * Informative message to display on the registration survey page
     *
     * @var \Eventbrite\Model\DataType\SurveyInfo|null
     */
    public ?\Eventbrite\Model\DataType\SurveyInfo $survey_info;

    /**
     * survey registration time limit (in minutes)
     *
     * @var int|null
     */
    public ?int $survey_time_limit;

    /**
     * which respondent type the information must be collected for (ticket_buyer or attendee)
     *
     * @var \Eventbrite\Model\Enum\TicketBuyerSettingsSurveyRespondent|null
     */
    public ?\Eventbrite\Model\Enum\TicketBuyerSettingsSurveyRespondent $survey_respondent;

    /**
     * Which ticket classes the information must be collected for
     *
     * @var array|null
     */
    public ?array $survey_ticket_classes;

}
