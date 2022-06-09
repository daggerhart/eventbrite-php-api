<?php declare(strict_types=1);

namespace Eventbrite\Model\DataType;

class PaymentPublicKey extends \Eventbrite\Model\ModelBase
{
    /**
     * Value that uniquely identifies the public key.
     *
     * @var string|null
     */
    public ?string $hash;

    /**
     * Public key in PEM format.
     *
     * @var string|null
     */
    public ?string $pem;

}
