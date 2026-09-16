<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class PluginValueInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $str;
    public ?int $i;
    public ?bool $b;
    public ?float $f;

    /** @var array<\Aazsamir\Stasphp\Graphql\PluginArgInput> */
    public ?array $o;

    /** @var array<\Aazsamir\Stasphp\Graphql\PluginValueInput> */
    public ?array $a;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\PluginArgInput> $o
     * @param array<\Aazsamir\Stasphp\Graphql\PluginValueInput> $a
     */
    public static function new(
        ?string $str = null,
        ?int $i = null,
        ?bool $b = null,
        ?float $f = null,
        ?array $o = null,
        ?array $a = null,
    ): self {
        $self = new self();
        $self->str = $str;
        $self->i = $i;
        $self->b = $b;
        $self->f = $f;
        $self->o = $o;
        $self->a = $a;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('str', $data)) {
            $self->str = $data['str'];
        }
        if (array_key_exists('i', $data)) {
            $self->i = $data['i'];
        }
        if (array_key_exists('b', $data)) {
            $self->b = $data['b'];
        }
        if (array_key_exists('f', $data)) {
            $self->f = $data['f'];
        }
        if (array_key_exists('o', $data)) {
            $self->o = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\PluginArgInput::fromArray($data);
            }, $data['o'] ?? []);
        }
        if (array_key_exists('a', $data)) {
            $self->a = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\PluginValueInput::fromArray($data);
            }, $data['a'] ?? []);
        }

        return $self;
    }
}
