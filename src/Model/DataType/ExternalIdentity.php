<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class ExternalIdentity extends \Eventbrite\Model\ModelBase
{
    /**
     * The Id of the External Identity
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The Id of the Eventbrite's user.
     *
     * @var string|null
     */
    public ?string $user_id;

    /**
     * The Id of the user at the external provider side.
     *
     * @var string|null
     */
    public ?string $external_user_id;

    /**
     * The external provider.
     *
     * @var \Eventbrite\Model\Enum\ExternalIdentityExternalProvider|null
     */
    public ?\Eventbrite\Model\Enum\ExternalIdentityExternalProvider $external_provider;

}
