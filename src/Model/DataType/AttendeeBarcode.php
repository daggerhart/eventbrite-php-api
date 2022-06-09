<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class AttendeeBarcode extends \Eventbrite\Model\ModelBase
{
    /**
     * The barcode contents. *Note that when viewed by the attendee, if the event organizer has turned off printable tickets, or if the organizer has method of delivery and the attendee method of delivery is not electronic, this field will be null in order to prevent exposing the barcode value. When viewed by the organizer with `event.orders:read` permission, the barcode will always be provided.*
     *
     * @var string|null
     */
    public ?string $barcode;

    /**
     * One of unused, used, or refunded
     *
     * @var \Eventbrite\Model\Enum\AttendeeBarcodeStatus|null
     */
    public ?\Eventbrite\Model\Enum\AttendeeBarcodeStatus $status;

    /**
     * When the attendee barcode was created
     *
     * @var string|null
     */
    public ?string $created;

    /**
     * When the attendee barcode was changed
     *
     * @var string|null
     */
    public ?string $changed;

    /**
     * The method used to validate the attendee barcode
     *
     * @var \Eventbrite\Model\Enum\AttendeeBarcodeCheckinType|null
     */
    public ?\Eventbrite\Model\Enum\AttendeeBarcodeCheckinType $checkin_type;

    /**
     * True if ticket has been printed
     *
     * @var bool|null
     */
    public ?bool $is_printed;

}
