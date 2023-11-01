<?php

declare(strict_types=1);

namespace Webparking\Logic4Client\Data;

class FreeValue
{
    public function __construct(
        public ?string $key,
        public ?string $value,
    ) {
    }

    /** @param array<mixed> $data */
    public static function make(array $data): self
    {
        return new self(
            key: $data['Key'],
            value: $data['Value'],
        );
    }
}