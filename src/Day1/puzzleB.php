<?php
declare(strict_types=1);

namespace AOC2024\Day1;
final class puzzleB extends Puzzle
{
    public function solve(): void
    {
        $array = $this->getInputCsv();
        $res = 0;
        $counts = array_count_values($array[1]);
        foreach ($array[0] as $val) {
            if (!isset($counts[$val])) {
                continue;
            }
            $res += $val * $counts[$val];
        }
        echo $res;
    }
}