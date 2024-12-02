<?php
declare(strict_types=1);

namespace AOC2024\Day;

use AOC2024\Base;

abstract class Puzzle extends Base
{
    protected int $day = 0;

    public function getInputCsv($separator = ' '): array
    {
        $input = [];
        return $input;
    }
}