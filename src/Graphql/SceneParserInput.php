<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class SceneParserInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<string> */
    public ?array $ignoreWords;
    public ?string $whitespaceCharacters;
    public ?bool $capitalizeTitle;
    public ?bool $ignoreOrganized;

    /**
     * @param array<string> $ignoreWords
     */
    public static function new(
        ?array $ignoreWords = null,
        ?string $whitespaceCharacters = null,
        ?bool $capitalizeTitle = null,
        ?bool $ignoreOrganized = null,
    ): self {
        $self = new self();
        $self->ignoreWords = $ignoreWords;
        $self->whitespaceCharacters = $whitespaceCharacters;
        $self->capitalizeTitle = $capitalizeTitle;
        $self->ignoreOrganized = $ignoreOrganized;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['ignoreWords'])) {
            $self->ignoreWords = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['ignoreWords'] ?? []);
        }
        if (isset($data['whitespaceCharacters'])) {
            $self->whitespaceCharacters = $data['whitespaceCharacters'];
        }
        if (isset($data['capitalizeTitle'])) {
            $self->capitalizeTitle = $data['capitalizeTitle'];
        }
        if (isset($data['ignoreOrganized'])) {
            $self->ignoreOrganized = $data['ignoreOrganized'];
        }

        return $self;
    }
}
