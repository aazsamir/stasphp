<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper\Input;

use DateTimeImmutable;

readonly class InputFile
{
    public function __construct(
        public string $id,
        public DateTimeImmutable $modTime,
        public string $path,
        public array $fingerprints,
        public int $size,
        public string $format,
        public int $width,
        public int $height,
        public float $duration,
        public string $videoCodec,
        public string $audioCodec,
        public int $framerate,
        public int $bitrate,
    ) {}
}
