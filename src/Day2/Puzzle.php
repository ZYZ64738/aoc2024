<?php
declare(strict_types=1);

namespace AOC2024\Day2;

use AOC2024\Base;

abstract class Puzzle extends Base
{
    protected int $day = 2;

    public function getInputCsv(): array
    {
        $input = explode(chr(10), $this->getInput());
        foreach ($input as &$row) {
            $row = explode(' ', $row);
            foreach ($row as &$item) {
                $item = (int)$item;
            }
        }
        return $input;
    }
}