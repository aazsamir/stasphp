<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class PluginValueInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $str;
    public ?int $i;
    public ?bool $b;
    public ?float $f;

    /** @var array<\Aazsamir\Stasphp\Graphpql\PluginArgInput> */
    public ?array $o;

    /** @var array<\Aazsamir\Stasphp\Graphpql\PluginValueInput> */
    public ?array $a;

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\PluginArgInput> $o
     * @param array<\Aazsamir\Stasphp\Graphpql\PluginValueInput> $a
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
        if (isset($data['str'])) {
            $self->str = $data['str'];
        }
        if (isset($data['i'])) {
            $self->i = $data['i'];
        }
        if (isset($data['b'])) {
            $self->b = $data['b'];
        }
        if (isset($data['f'])) {
            $self->f = $data['f'];
        }
        if (isset($data['o'])) {
            $self->o = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\PluginArgInput::fromArray($data);
            }, $data['o'] ?? []);
        }
        if (isset($data['a'])) {
            $self->a = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphpql\PluginValueInput::fromArray($data);
            }, $data['a'] ?? []);
        }

        return $self;
    }
}
