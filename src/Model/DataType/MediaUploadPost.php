<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class MediaUploadPost extends \Eventbrite\Model\ModelBase
{
    /**
     * The upload_token from the GET portion of the upload
     *
     * @var string|null
     */
    public ?string $upload_token;

    /**
     * A crop mask defines the window that will be used to crop the uploaded media
     *
     * @var \Eventbrite\Model\DataType\CropMask|null
     */
    public ?\Eventbrite\Model\DataType\CropMask $crop_mask;

}
