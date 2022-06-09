<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class SeasonalBanner extends \Eventbrite\Model\ModelBase
{
    /**
     * The unique name which indentifies the banner in the backend (It shouldn't be rendered).
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Text of the banner title.
     *
     * @var string|null
     */
    public ?string $banner_title;

    /**
     * Hex color code (without #) for the banner title in its light version.
     *
     * @var string|null
     */
    public ?string $banner_title_color_light;

    /**
     * Hex color code (without #) for the banner title in its dark version.
     *
     * @var string|null
     */
    public ?string $banner_title_color_dark;

    /**
     * Text of the banner subtitle.
     *
     * @var string|null
     */
    public ?string $banner_subtitle;

    /**
     * Hex color code (without #) for the banner subtitle in its light version.
     *
     * @var string|null
     */
    public ?string $banner_subtitle_color_light;

    /**
     * Hex color code (without #) for the banner subtitle in its dark version.
     *
     * @var string|null
     */
    public ?string $banner_subtitle_color_dark;

    /**
     * Hex color code (without #) for the background of the banner in its light version.
     *
     * @var string|null
     */
    public ?string $background_color_light;

    /**
     * Hex color code (without #) for the background of the banner in its dark version.
     *
     * @var string|null
     */
    public ?string $background_color_dark;

    /**
     * Url to get the banner image for web clients in its light version.
     *
     * @var string|null
     */
    public ?string $web_image_url_light;

    /**
     * Url to get the banner image for web clients in its light version.
     *
     * @var string|null
     */
    public ?string $web_image_url_dark;

    /**
     * Url to get the banner image for mobile clients in its light version.
     *
     * @var string|null
     */
    public ?string $mobile_image_url_light;

    /**
     * Url to get the banner image for mobile clients in its dark version.
     *
     * @var string|null
     */
    public ?string $mobile_image_url_dark;

    /**
     * Relative url (without www.eventbrite.com) of the collection or event to which this banner should redirect.
     *
     * @var string|null
     */
    public ?string $call_to_action_url;

    /**
     * Text that will be rendered inside the banner button.
     *
     * @var string|null
     */
    public ?string $button_text;

    /**
     * Hex color code (without #) for the text of the banner button.
     *
     * @var string|null
     */
    public ?string $button_text_color;

    /**
     * Hex color code (without #) for the background of the banner button.
     *
     * @var string|null
     */
    public ?string $button_background_color;

}
