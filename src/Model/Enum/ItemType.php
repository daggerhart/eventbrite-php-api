<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static S3_ASSET(): string
 * @method static LOCAL_TEMPLATE(): string
 */
final class ItemType extends \MyCLabs\Enum\Enum
{
    private const S3_ASSET = 's3_asset';
    private const LOCAL_TEMPLATE = 'local_template';
}
