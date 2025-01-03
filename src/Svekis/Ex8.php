<?php

namespace Telema\Svekis;

use Telema\traits\CsvReader;
use Telema\Date;

class Ex8
{
    use CsvReader;

    public const FILE_PATH = __DIR__ . '/../../data/svekis/ex08.csv';

    public function __invoke()
    {
        return $this->readCsv(self::FILE_PATH, fn ($item) => Date::formatDate($item['date']));
    }
}
