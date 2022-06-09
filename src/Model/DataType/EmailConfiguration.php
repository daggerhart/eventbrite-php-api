<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class EmailConfiguration extends \Eventbrite\Model\ModelBase
{
    /**
     * If new users will receive welcome email
     *
     * @var bool|null
     */
    public ?bool $disable_new_user_email;

    /**
     * If the ticket buyer will receive confirmation email
     *
     * @var bool|null
     */
    public ?bool $disable_confirmation_email;

    /**
     * If the ticket buyer will receive PDF ticket in confirmation email
     *
     * @var bool|null
     */
    public ?bool $disable_pdf_ticket;

    /**
     * If the ticket buyer will receive a receipt email instead of confirmation email
     *
     * @var bool|null
     */
    public ?bool $receipt_only;

    /**
     * Used for new users to send them newsletters emails
     *
     * @var bool|null
     */
    public ?bool $disable_newsletter_email;

    /**
     * Used for new users to send news emails
     *
     * @var bool|null
     */
    public ?bool $disable_attendee_news_email;

    /**
     * If the organizer will receive confirmation email
     *
     * @var bool|null
     */
    public ?bool $disable_email_bcc;

}
