<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Graphpql;

class ConfigScrapingResult implements \Aazsamir\Graphpql\Model\GraphObject
{
    use \Aazsamir\Graphpql\Model\ToArray;

    public ?string $scraperUserAgent;
    public ?string $scraperCDPPath;
    public bool $scraperCertCheck;

    /** @var array<string> */
    public array $excludeTagPatterns;

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigScrapingResultField<mixed>
     */
    public static function scraperUserAgent(): Fields\ConfigScrapingResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigScrapingResultField::scraperUserAgent();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigScrapingResultField<mixed>
     */
    public static function scraperCDPPath(): Fields\ConfigScrapingResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigScrapingResultField::scraperCDPPath();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigScrapingResultField<mixed>
     */
    public static function scraperCertCheck(): Fields\ConfigScrapingResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigScrapingResultField::scraperCertCheck();
    }

    /**
     * @return \Aazsamir\Stasphp\Graphpql\Fields\ConfigScrapingResultField<mixed>
     */
    public static function excludeTagPatterns(): Fields\ConfigScrapingResultField
    {
        return \Aazsamir\Stasphp\Graphpql\Fields\ConfigScrapingResultField::excludeTagPatterns();
    }

    /**
     * @param array<string> $excludeTagPatterns
     */
    public static function new(
        bool $scraperCertCheck,
        array $excludeTagPatterns,
        ?string $scraperUserAgent = null,
        ?string $scraperCDPPath = null,
    ): self {
        $self = new self();
        $self->scraperCertCheck = $scraperCertCheck;
        $self->excludeTagPatterns = $excludeTagPatterns;
        $self->scraperUserAgent = $scraperUserAgent;
        $self->scraperCDPPath = $scraperCDPPath;

        return $self;
    }

    public static function fromArray(array $data): self
    {
        $self = new self();
        if (isset($data['scraperCertCheck'])) {
            $self->scraperCertCheck = $data['scraperCertCheck'];
        }
        if (isset($data['excludeTagPatterns'])) {
            $self->excludeTagPatterns = array_map(function ($data) {
                if ($data === []) {
                    return [];
                }

                return $data;
            }, $data['excludeTagPatterns'] ?? []);
        }
        if (isset($data['scraperUserAgent'])) {
            $self->scraperUserAgent = $data['scraperUserAgent'];
        }
        if (isset($data['scraperCDPPath'])) {
            $self->scraperCDPPath = $data['scraperCDPPath'];
        }

        return $self;
    }
}
