<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class PackageSourceInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $name;
    public string $url;
    public ?string $local_path;

    public static function new(string $url, ?string $name = null, ?string $local_path = null): self
    {
        $self = new self();
        $self->url = $url;
        $self->name = $name;
        $self->local_path = $local_path;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['local_path'])) {
            $self->local_path = $data['local_path'];
        }

        return $self;
    }
}
