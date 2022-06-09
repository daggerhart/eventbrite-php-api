<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ReportDataSales extends \Eventbrite\Model\ModelBase
{
    /**
     * When the event happens
     *
     * @var string|null
     */
    public ?string $date;

    /**
     * @var string|null
     */
    public ?string $topics;

    /**
     * When the event happens with event Time Zone
     *
     * @var string|null
     */
    public ?string $date_localized;

    /**
     * @var \Eventbrite\Model\DataType\ReportTotalsSales|null
     */
    public ?\Eventbrite\Model\DataType\ReportTotalsSales $totals;

}
