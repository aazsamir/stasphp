<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class IdentifyMetadataOptions implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphql\IdentifyFieldOptions> */
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
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField<\Aazsamir\Stasphp\Graphql\SelectionSet\IdentifyFieldOptionsSelectionSet>
     */
    public static function fieldOptions(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField::fieldOptions();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function setCoverImage(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField::setCoverImage();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function setOrganized(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField::setOrganized();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function includeMalePerformers(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField::includeMalePerformers();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function performerGenders(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField::performerGenders();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function skipMultipleMatches(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField::skipMultipleMatches();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function skipMultipleMatchTag(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField::skipMultipleMatchTag();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function skipSingleNamePerformers(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField::skipSingleNamePerformers();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function skipSingleNamePerformerTag(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\IdentifyMetadataOptionsField::skipSingleNamePerformerTag();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\IdentifyFieldOptions> $fieldOptions
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

                return \Aazsamir\Stasphp\Graphql\IdentifyFieldOptions::fromArray($data);
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
