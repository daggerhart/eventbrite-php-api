<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class TemplateEmailScheduleItem extends \Eventbrite\Model\ModelBase
{
    /**
     * ID of the sent item.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * ID of the organization.
     *
     * @var string|null
     */
    public ?string $organization_id;

    /**
     * The ID of the user who created the email.
     *
     * @var string|null
     */
    public ?string $creator_id;

    /**
     * The medium of the schedule item.
     *
     * @var 
     */
    public $medium;

    /**
     * The type of the schedule item.
     *
     * @var 
     */
    public $item_type;

    /**
     * Date/time the sending is scheduled for.
     *
     * @var \Eventbrite\Model\DataType\DatetimeTz|null
     */
    public ?\Eventbrite\Model\DataType\DatetimeTz $time_to_send;

    /**
     * Date/time the sending was completed.
     *
     * @var \Eventbrite\Model\DataType\DatetimeTz|null
     */
    public ?\Eventbrite\Model\DataType\DatetimeTz $time_send_completed;

    /**
     * Sending status.
     *
     * @var 
     */
    public $status;

    /**
     * The name of the file to be emailed.
     *
     * @var string|null
     */
    public ?string $filename;

    /**
     * A schemaless dictionary with email content. (This can be anything)
     *
     * @var array|null
     */
    public ?array $context;

}
