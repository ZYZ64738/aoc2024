<?php
declare(strict_types=1);

namespace AOC2024\Day2;

use AOC2024\Base;

abstract class Puzzle extends Base
{
    public function getInputCsv($separator = ' '): array
    {
        $input = str_getcsv($this->getInput(), chr(10));
        foreach ($input as &$row) {
            $row = str_getcsv($row, $separator);
        }
        return $input;
    }
}