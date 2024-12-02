<?php
declare(strict_types=1);

namespace AOC2024\Day1;

use AOC2024\Base;

abstract class Puzzle extends Base
{
    protected int $day = 1;

    public function getInputCsv($separator = ' '): array
    {
        $input = explode(chr(10), $this->getInput());
        $array = [];
        foreach ($input as &$row) {
            $row = explode('   ', $row);
            $array[0][] = (int)$row[0];
            $array[1][] = (int)$row[1];
        }
        sort($array[0]);
        sort($array[1]);
        return $array;
    }
}