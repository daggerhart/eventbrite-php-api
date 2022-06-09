<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class StructuredContentPage extends \Eventbrite\Model\ModelBase
{
    /**
     * determines if the page can be accessed by users who are not logged in. Only applies to pages with purpose equal to digital-content.
     *
     * @var 
     */
    public $access_type;

    /**
     * array of modules associated with the page
     *
     * @var array|null
     */
    public ?array $modules;

    /**
     * the version of the page object (every time modules get updated, a new page object with the same id but new version gets created)
     *
     * @var string|null
     */
    public ?string $page_version_number;

    /**
     * @var \Eventbrite\Model\DataType\Pagination|null
     */
    public ?\Eventbrite\Model\DataType\Pagination $pagination;

    /**
     * @var 
     */
    public $purpose;

    /**
     * uris to help with creating, publishing, preview modules
     *
     * @var \Eventbrite\Model\DataType\ResourceURIs|null
     */
    public ?\Eventbrite\Model\DataType\ResourceURIs $resource_uris;

}
