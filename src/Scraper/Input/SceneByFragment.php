<?php

declare(strict_types=1);

namespace Aazsamir\Stasphp\Scraper\Input;

use DateTimeImmutable;

readonly class SceneByFragment
{
    /**
     * @param InputFile[] $files
     */
    public function __construct(
        public string $id,
        public string $title,
        public ?string $url,
        public array $urls,
        public ?DateTimeImmutable $date,
        public string $details,
        public array $files,
    ) {}

    public static function fromArray(array $data): self
    {
        $files = [];

        foreach ($data['files'] ?? [] as $fileData) {
            $files[] = new InputFile(
                id: $fileData['id'],
                modTime: new DateTimeImmutable($fileData['mod_time']),
                path: $fileData['path'],
                fingerprints: $fileData['fingerprints'] ?? [],
                size: $fileData['size'],
                format: $fileData['format'],
                width: $fileData['width'],
                height: $fileData['height'],
                duration: $fileData['duration'],
                videoCodec: $fileData['video_codec'],
                audioCodec: $fileData['audio_codec'],
                framerate: $fileData['frame_rate'],
                bitrate: $fileData['bitrate'],
            );
        }

        return new self(
            id: $data['id'],
            title: $data['title'],
            url: $data['url'],
            urls: $data['urls'],
            date: isset($data['date']) ? new DateTimeImmutable($data['date']) : null,
            details: $data['details'],
            files: $files,
        );
    }
}
