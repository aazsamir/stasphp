<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class LatestVersion implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public string $version;
    public string $shorthash;
    public string $release_date;
    public string $url;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\LatestVersionField<mixed>
     */
    public static function version(): Fields\LatestVersionField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\LatestVersionField::version();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\LatestVersionField<mixed>
     */
    public static function shorthash(): Fields\LatestVersionField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\LatestVersionField::shorthash();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\LatestVersionField<mixed>
     */
    public static function release_date(): Fields\LatestVersionField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\LatestVersionField::release_date();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\LatestVersionField<mixed>
     */
    public static function url(): Fields\LatestVersionField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\LatestVersionField::url();
    }

    public static function new(string $version, string $shorthash, string $release_date, string $url): self
    {
        $self = new self();
        $self->version = $version;
        $self->shorthash = $shorthash;
        $self->release_date = $release_date;
        $self->url = $url;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['version'])) {
            $self->version = $data['version'];
        }
        if (isset($data['shorthash'])) {
            $self->shorthash = $data['shorthash'];
        }
        if (isset($data['release_date'])) {
            $self->release_date = $data['release_date'];
        }
        if (isset($data['url'])) {
            $self->url = $data['url'];
        }

        return $self;
    }
}
