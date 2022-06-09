<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static CHANGED_SINCE_ASC(): string
 * @method static CHANGED_SINCE_DESC(): string
 * @method static CREATED_AFTER_ASC(): string
 * @method static CREATED_AFTER_DESC(): string
 * @method static EMAIL_ASC(): string
 * @method static EMAIL_DESC(): string
 * @method static EVENT_ID_ASC(): string
 * @method static EVENT_ID_DESC(): string
 * @method static ID_ASC(): string
 * @method static ID_DESC(): string
 * @method static NAME_ASC(): string
 * @method static NAME_DESC(): string
 */
final class AttendeeSearchOrder extends \MyCLabs\Enum\Enum
{
    private const CHANGED_SINCE_ASC = 'changed_since_asc';
    private const CHANGED_SINCE_DESC = 'changed_since_desc';
    private const CREATED_AFTER_ASC = 'created_after_asc';
    private const CREATED_AFTER_DESC = 'created_after_desc';
    private const EMAIL_ASC = 'email_asc';
    private const EMAIL_DESC = 'email_desc';
    private const EVENT_ID_ASC = 'event_id_asc';
    private const EVENT_ID_DESC = 'event_id_desc';
    private const ID_ASC = 'id_asc';
    private const ID_DESC = 'id_desc';
    private const NAME_ASC = 'name_asc';
    private const NAME_DESC = 'name_desc';
}
