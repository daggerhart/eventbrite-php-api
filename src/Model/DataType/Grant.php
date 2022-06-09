<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Grant extends \Eventbrite\Model\ModelBase
{
    /**
     * The grant id
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The name of the object to which the role is granted. Only ‘user’ is supported at the moment. In the future roles may be granted on more types of objects.
     *
     * @var \Eventbrite\Model\Enum\GrantGranteeType|null
     */
    public ?\Eventbrite\Model\Enum\GrantGranteeType $grantee_type;

    /**
     * @var string|null
     */
    public ?string $grantee_id;

    /**
     * The ID of the user to which the Role is granted on the Entity
     *
     * @var string|null
     */
    public ?string $user_id;

    /**
     * The ID of the granted Role.
     *
     * @var string|null
     */
    public ?string $role_id;

    /**
     * Type of entities, that are objects which permissions can be granted ON
     *
     * @var \Eventbrite\Model\Enum\GrantEntityType|null
     */
    public ?\Eventbrite\Model\Enum\GrantEntityType $entity_type;

    /**
     * @var string|null
     */
    public ?string $entity_id;

    /**
     * The ID of the event on which the Role is granted if entity type is event
     *
     * @var string|null
     */
    public ?string $event_id;

    /**
     * The ID of the organization on which the Role is granted if entity type is user
     *
     * @var string|null
     */
    public ?string $organization_id;

}
