<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphql;

class Package implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $package_id;
    public string $name;
    public ?string $version;
    public ?\DateTimeInterface $date;

    /** @var array<\Aazsamir\Stasphp\Graphql\Package> */
    public array $requires;
    public string $sourceURL;
    public ?Package $source_package;
    public mixed $metadata;

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PackageField<mixed>
     */
    public static function package_id(): Fields\PackageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PackageField::package_id();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PackageField<mixed>
     */
    public static function name(): Fields\PackageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PackageField::name();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PackageField<mixed>
     */
    public static function version(): Fields\PackageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PackageField::version();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PackageField<mixed>
     */
    public static function date(): Fields\PackageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PackageField::date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PackageField<\Aazsamir\Stasphp\Graphql\SelectionSet\PackageSelectionSet>
     */
    public static function requires(): Fields\PackageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PackageField::requires();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PackageField<mixed>
     */
    public static function sourceURL(): Fields\PackageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PackageField::sourceURL();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PackageField<\Aazsamir\Stasphp\Graphql\SelectionSet\PackageSelectionSet>
     */
    public static function source_package(): Fields\PackageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PackageField::source_package();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphql\Fields\PackageField<mixed>
     */
    public static function metadata(): Fields\PackageField
    {
        return \Aazsamir\Stasphp\Graphql\Fields\PackageField::metadata();
    }

    /**
     * @param array<\Aazsamir\Stasphp\Graphql\Package> $requires
     */
    public static function new(
        string $package_id,
        string $name,
        array $requires,
        string $sourceURL,
        mixed $metadata,
        ?string $version = null,
        ?\DateTimeInterface $date = null,
        ?Package $source_package = null,
    ): self {
        $self = new self();
        $self->package_id = $package_id;
        $self->name = $name;
        $self->requires = $requires;
        $self->sourceURL = $sourceURL;
        $self->metadata = $metadata;
        $self->version = $version;
        $self->date = $date;
        $self->source_package = $source_package;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['package_id'])) {
            $self->package_id = $data['package_id'];
        }
        if (isset($data['name'])) {
            $self->name = $data['name'];
        }
        if (isset($data['requires'])) {
            $self->requires = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return \Aazsamir\Stasphp\Graphql\Package::fromArray($data);
            }, $data['requires'] ?? []);
        }
        if (isset($data['sourceURL'])) {
            $self->sourceURL = $data['sourceURL'];
        }
        if (isset($data['metadata'])) {
            $self->metadata = $data['metadata'];
        }
        if (isset($data['version'])) {
            $self->version = $data['version'];
        }
        if (isset($data['date'])) {
            $self->date = new \DateTimeImmutable($data['date']);
        }
        if (isset($data['source_package'])) {
            $self->source_package = \Aazsamir\Stasphp\Graphql\Package::fromArray($data['source_package']);
        }

        return $self;
    }
}
