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
        if (isset($data['fieldOptions'])) {
            $self->fieldOptions = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\IdentifyFieldOptionsInput::fromArray($data);
            }, $data['fieldOptions'] ?? []);
        }
        if (isset($data['setCoverImage'])) {
            $self->setCoverImage = $data['setCoverImage'];
        }
        if (isset($data['setOrganized'])) {
            $self->setOrganized = $data['setOrganized'];
        }
        if (isset($data['includeMalePerformers'])) {
            $self->includeMalePerformers = $data['includeMalePerformers'];
        }
        if (isset($data['performerGenders'])) {
            $self->performerGenders = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\GenderEnum::from($data);
            }, $data['performerGenders'] ?? []);
        }
        if (isset($data['skipMultipleMatches'])) {
            $self->skipMultipleMatches = $data['skipMultipleMatches'];
        }
        if (isset($data['skipMultipleMatchTag'])) {
            $self->skipMultipleMatchTag = $data['skipMultipleMatchTag'];
        }
        if (isset($data['skipSingleNamePerformers'])) {
            $self->skipSingleNamePerformers = $data['skipSingleNamePerformers'];
        }
        if (isset($data['skipSingleNamePerformerTag'])) {
            $self->skipSingleNamePerformerTag = $data['skipSingleNamePerformerTag'];
        }

        return $self;
    }
}
