<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class Role extends \Eventbrite\Model\ModelBase
{
    /**
     * The role id
     *
     * @var string|null
     */
    public ?string $id;

    /**
     * The role name
     *
     * @var string|null
     */
    public ?string $name;

    /**
     * The role description
     *
     * @var string|null
     */
    public ?string $description;

    /**
     * The owning organization id
     *
     * @var string|null
     */
    public ?string $organization_id;

    /**
     * @var array|null
     */
    public ?array $permissions;

    /**
     * boolean indicating whether the role can be edited or not
     *
     * @var bool|null
     */
    public ?bool $immutable;

    /**
     * boolean indicating whether the role can be granted or not
     *
     * @var bool|null
     */
    public ?bool $grantable;

    /**
     * boolean indicating whether the role can be deleted or not
     *
     * @var bool|null
     */
    public ?bool $deletable;

    /**
     * the type of entity on which the role permissions act. If there's more than one, the smallest one will be returned (considering 'event'<'user').
     *
     * @var \Eventbrite\Model\Enum\RolePermissionType|null
     */
    public ?\Eventbrite\Model\Enum\RolePermissionType $permission_type;

}
