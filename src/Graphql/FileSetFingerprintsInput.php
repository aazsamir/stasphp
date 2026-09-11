<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class FileSetFingerprintsInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $id;

    /** @var array<\Aazsamir\Stasphp\Graphpql\SetFingerprintsInput> */
    public array $fingerprints;

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\SetFingerprintsInput> $fingerprints
     */
    public static function new(string $id, array $fingerprints): self
    {
        $self = new self();
        $self->id = $id;
        $self->fingerprints = $fingerprints;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['id'])) {
            $self->id = $data['id'];
        }
        if (isset($data['fingerprints'])) {
            $self->fingerprints = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\SetFingerprintsInput::fromArray($data);
            }, $data['fingerprints'] ?? []);
        }

        return $self;
    }
}
