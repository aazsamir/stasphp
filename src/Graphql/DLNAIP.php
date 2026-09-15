<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class DLNAIP implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $ipAddress;
    public ?\DateTimeInterface $until;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\DLNAIPField<mixed>
     */
    public static function ipAddress(): Fields\DLNAIPField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\DLNAIPField::ipAddress();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\DLNAIPField<mixed>
     */
    public static function until(): Fields\DLNAIPField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\DLNAIPField::until();
    }

    public static function new(string $ipAddress, ?\DateTimeInterface $until = null): self
    {
        $self = new self();
        $self->ipAddress = $ipAddress;
        $self->until = $until;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['ipAddress'])) {
            $self->ipAddress = $data['ipAddress'];
        }
        if (isset($data['until'])) {
            $self->until = new \DateTimeImmutable($data['until']);
        }

        return $self;
    }
}
