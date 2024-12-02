<?php
declare(strict_types=1);

namespace AOC2024\Day1;
final class puzzleA extends Puzzle
{
    public function solve(): void
    {
        $array = $this->getInputCsv();
        $res = 0;
        foreach ($array[0] as $key => $val1) {
            $val2 = $array[1][$key];
            $res += abs($val1 - $val2);
        }
        echo $res;
    }
}
