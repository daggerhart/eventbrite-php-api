<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ThemeUpdate extends \Eventbrite\Model\ModelBase
{
    /**
     * The hexadecimal value of the campaign background color.
     *
     * @var string|null
     */
    public ?string $background_color;

    /**
     * The hexadecimal value of the campaign primary color.
     *
     * @var string|null
     */
    public ?string $primary_color;

    /**
     * The ID of the campaigns header image.
     *
     * @var string|null
     */
    public ?string $header_image_id;

    /**
     * The URL of the header image's link.
     *
     * @var string|null
     */
    public ?string $header_image_link;

    /**
     * The hover text that displays on the header image link.
     *
     * @var string|null
     */
    public ?string $header_image_alt_text;

    /**
     * The theme type of the campaign.
     *
     * @var 
     */
    public $theme_type;

    /**
     * The ID of the campaigns background image.
     *
     * @var string|null
     */
    public ?string $background_image_id;

}
