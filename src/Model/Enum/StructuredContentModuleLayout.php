<?php declare(strict_types=1);

namespace Eventbrite\Model\Enum;

/**
 * EnumType: dataStructure
 *
 * @method static IMAGE_LEFT(): string
 * @method static IMAGE_TOP(): string
 * @method static IMAGE_GRID(): string
 * @method static CAROUSEL(): string
 * @method static GRID(): string
 */
final class StructuredContentModuleLayout extends \MyCLabs\Enum\Enum
{
    private const IMAGE_LEFT = 'image_left';
    private const IMAGE_TOP = 'image_top';
    private const IMAGE_GRID = 'image_grid';
    private const CAROUSEL = 'carousel';
    private const GRID = 'grid';
}
