<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ArtistExtendedData extends \Eventbrite\Model\ModelBase
{
    /**
     * The id for artist extended data.
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * True if the extended data is the original one, false otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_canonical;

    /**
     * Useful to distinguish who is providing the extended data.
     *
     * @var \Eventbrite\Model\Enum\ArtistExtendedDataCondition|null
     */
    public ?\Eventbrite\Model\Enum\ArtistExtendedDataCondition $condition;

    /**
     * The biography of the artist. It is a string of HTML (which should be sanitized and free from injected script, tags, etc. But as always, be careful what you put in your DOM).
     *
     * @var string|null
     */
    public ?string $biography;

    /**
     * A list of genres for the artist.
     *
     * @var array|null
     */
    public ?array $genres;

    /**
     * A list of social media links for an artist.
     *
     * @var array|null
     */
    public ?array $social_media_links;

    /**
     * A list of images for an artist.
     *
     * @var array|null
     */
    public ?array $images;

    /**
     * The artist that is represented.
     *
     * @var string|null
     */
    public ?string $artist_id;

    /**
     * The artist's name.
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * Slugified name of the artist.
     *
     * @var string|null
     */
    public ?string $name_slug;

}
