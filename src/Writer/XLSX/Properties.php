<?php

declare(strict_types=1);

namespace OpenSpout\Writer\XLSX;

/**
 * @internal
 */
final readonly class Properties
{
    public function __construct(
        public ?string $title = 'Untitled Spreadsheet',
        public ?string $subject = null,
        public ?string $creator = 'OpenSpout',
        public ?string $lastModifiedBy = 'OpenSpout',
        public ?string $keywords = null,
        public ?string $description = null,
        public ?string $category = null,
        public ?string $language = null,
    ) {}
}
