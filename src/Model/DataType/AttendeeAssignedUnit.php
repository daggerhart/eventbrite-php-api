<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class AttendeeAssignedUnit extends \Eventbrite\Model\ModelBase
{
    /**
     * The seating assignment's ID. This value can never be null.
     *
     * @var string|null
     */
    public ?string $unit_id;

    /**
     * Detailed description for the seating assignment. This is calculated from title and strings of this seating assignment. This value can never be null.
     *
     * @var string|null
     */
    public ?string $description;

    /**
    * This seat assignment's physical location on the seat map. This value is null or omitted if seat map is not published for this event.
    
    "Pin" ("My seat is here") for a given seat assignment can be displayed using this seat location image info. For a given order with multiple attendees, all seat assignments are usually placed on the same seat map image. In case different seat map images are used within the same order, only those locations with the identical image url should be displayed on the same image. Even when there are many assigned seats within very small part of image, we recommend placing “pin” for each seat. Alternatively, x-y coordinates can be compared to place a single pin for seats that are close together.
    *
    * @var \Eventbrite\Model\DataType\UnitLocationImage|null
    */
    public ?\Eventbrite\Model\DataType\UnitLocationImage $location_image;

    /**
     * List of label strings of this seating assignment. This value can never be null.
     *
     * @var array|null
     */
    public ?array $labels;

    /**
     * List of title strings of this seating assignment. This value can never be null. Number of titles are always equal or more than number of labels. If seat locations are displayed in the grid view, api client is expected to group assigned locations by titles and use a separate grid for each unique titles.
     *
     * @var array|null
     */
    public ?array $titles;

}
