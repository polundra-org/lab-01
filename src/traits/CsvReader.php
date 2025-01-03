<?php

namespace Telema\traits;

trait CsvReader
{
    public function readCsv(string $path, $fn)
    {
        $handle = fopen($path, 'rt');
        $headers = fgetcsv($handle, 100, ',');

        $items = [];

        while (!feof($handle)) {
            $line = fgetcsv($handle, 100, ',');
            $item = array_combine($headers, $line);
            $items[] = $fn($item);
        }

        return $items;
    }
}
