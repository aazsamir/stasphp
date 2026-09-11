<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class IdentifyMetadataOptions implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    /** @var array<\Aazsamir\Stasphp\Graphpql\IdentifyFieldOptions> */
    public ?array $fieldOptions;
    public ?bool $setCoverImage;
    public ?bool $setOrganized;
    public ?bool $includeMalePerformers;

    /** @var array<\Aazsamir\Stasphp\Graphpql\GenderEnum> */
    public ?array $performerGenders;
    public ?bool $skipMultipleMatches;
    public ?string $skipMultipleMatchTag;
    public ?bool $skipSingleNamePerformers;
    public ?string $skipSingleNamePerformerTag;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField<\Aazsamir\Stasphp\Graphpql\SelectionSet\IdentifyFieldOptionsSelectionSet>
     */
    public static function fieldOptions(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField::fieldOptions();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function setCoverImage(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField::setCoverImage();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function setOrganized(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField::setOrganized();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function includeMalePerformers(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField::includeMalePerformers();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function performerGenders(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField::performerGenders();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function skipMultipleMatches(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField::skipMultipleMatches();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function skipMultipleMatchTag(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField::skipMultipleMatchTag();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function skipSingleNamePerformers(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField::skipSingleNamePerformers();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField<mixed>
     */
    public static function skipSingleNamePerformerTag(): Fields\IdentifyMetadataOptionsField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\IdentifyMetadataOptionsField::skipSingleNamePerformerTag();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphpql\IdentifyFieldOptions> $fieldOptions
     * @param array<\Aazsamir\Stasphp\Graphpql\GenderEnum> $performerGenders
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

                return \Aazsamir\Stasphp\Graphpql\IdentifyFieldOptions::fromArray($data);
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

                return \Aazsamir\Stasphp\Graphpql\GenderEnum::from($data);
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
