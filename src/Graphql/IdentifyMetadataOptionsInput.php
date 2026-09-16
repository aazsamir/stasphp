<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class IdentifyMetadataOptionsInput implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphql\IdentifyFieldOptionsInput> */
    public ?array $fieldOptions;
    public ?bool $setCoverImage;
    public ?bool $setOrganized;
    public ?bool $includeMalePerformers;

    /** @var array<\Aazsamir\Stasphp\Graphql\GenderEnum> */
    public ?array $performerGenders;
    public ?bool $skipMultipleMatches;
    public ?string $skipMultipleMatchTag;
    public ?bool $skipSingleNamePerformers;
    public ?string $skipSingleNamePerformerTag;

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\IdentifyFieldOptionsInput> $fieldOptions
     * @param array<\Aazsamir\Stasphp\Graphql\GenderEnum> $performerGenders
     */
    public static function new(
        ?array $fieldOptions = null,
        ?bool $setCoverImage = null,
        ?bool $setOrganized = null,
        ?bool $includeMalePerformers = null,
        ?array $performerGenders = null,
        ?bool $skipMultipleMatches = null,
        ?string $skipMultipleMatchTag = null,
        ?bool $skipSingleNamePerformers = null,
        ?string $skipSingleNamePerformerTag = null,
    ): self {
        $self = new self();
        $self->fieldOptions = $fieldOptions;
        $self->setCoverImage = $setCoverImage;
        $self->setOrganized = $setOrganized;
        $self->includeMalePerformers = $includeMalePerformers;
        $self->performerGenders = $performerGenders;
        $self->skipMultipleMatches = $skipMultipleMatches;
        $self->skipMultipleMatchTag = $skipMultipleMatchTag;
        $self->skipSingleNamePerformers = $skipSingleNamePerformers;
        $self->skipSingleNamePerformerTag = $skipSingleNamePerformerTag;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (array_key_exists('fieldOptions', $data)) {
            $self->fieldOptions = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\IdentifyFieldOptionsInput::fromArray($data);
            }, $data['fieldOptions'] ?? []);
        }
        if (array_key_exists('setCoverImage', $data)) {
            $self->setCoverImage = $data['setCoverImage'];
        }
        if (array_key_exists('setOrganized', $data)) {
            $self->setOrganized = $data['setOrganized'];
        }
        if (array_key_exists('includeMalePerformers', $data)) {
            $self->includeMalePerformers = $data['includeMalePerformers'];
        }
        if (array_key_exists('performerGenders', $data)) {
            $self->performerGenders = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\GenderEnum::from($data);
            }, $data['performerGenders'] ?? []);
        }
        if (array_key_exists('skipMultipleMatches', $data)) {
            $self->skipMultipleMatches = $data['skipMultipleMatches'];
        }
        if (array_key_exists('skipMultipleMatchTag', $data)) {
            $self->skipMultipleMatchTag = $data['skipMultipleMatchTag'];
        }
        if (array_key_exists('skipSingleNamePerformers', $data)) {
            $self->skipSingleNamePerformers = $data['skipSingleNamePerformers'];
        }
        if (array_key_exists('skipSingleNamePerformerTag', $data)) {
            $self->skipSingleNamePerformerTag = $data['skipSingleNamePerformerTag'];
        }

        return $self;
    }
}
