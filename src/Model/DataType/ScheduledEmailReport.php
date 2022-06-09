<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ScheduledEmailReport extends \Eventbrite\Model\ModelBase
{
    /**
     * Id of the report.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The name of the report. Max length: 100 characters. Will be truncated if more characters are sent.
     *
     * @var string|null
     */
    public ?string $report_name;

    /**
     * The report configuration, should contain `event_ids` and metrics.
     *
     * @var array|null
     */
    public ?array $report_options;

    /**
     * Possible frequencies
     *
     * @var \Eventbrite\Model\Enum\ScheduledEmailReportScheduleFrequency|null
     */
    public ?\Eventbrite\Model\Enum\ScheduledEmailReportScheduleFrequency $schedule_frequency;

    /**
     * Timezone in which to report in, IANA Timezone ID.
     *
     * @var string|null
     */
    public ?string $timezone;

    /**
     * Status of the scheduled report
     *
     * @var \Eventbrite\Model\Enum\ScheduledEmailReportReportStatus|null
     */
    public ?\Eventbrite\Model\Enum\ScheduledEmailReportReportStatus $report_status;

    /**
     * The list of emails to send the report once is processed. The maximum length of recipient list is 10.
     *
     * @var array|null
     */
    public ?array $recipients;

}
