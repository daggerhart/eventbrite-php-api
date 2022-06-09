<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: member
 *
 * @method static DRAFT(): string
 * @method static QUEUED(): string
 * @method static SENDING(): string
 * @method static SENT(): string
 * @method static INCOMPLETE(): string
 */
final class CampaignStatus extends \MyCLabs\Enum\Enum
{
    private const DRAFT = 'draft';
    private const QUEUED = 'queued';
    private const SENDING = 'sending';
    private const SENT = 'sent';
    private const INCOMPLETE = 'incomplete';
}
