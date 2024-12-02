<?php
declare(strict_types=1);

namespace AOC2024\Day2;

final class PuzzleA extends Puzzle
{
    public const MAX_DEVIATION = 3;

    public function solve(): int
    {
        $safeLevels = 0;
        foreach ($this->getInputCsv() as $input) {
            if ($this->levelsSavelyIncreasing($input) || $this->levelsSavelyDecreasing($input)) {
                $safeLevels++;
            }
        }
        return $safeLevels;
    }

    protected
    function levelsSavelyIncreasing($levels)
    {
        for ($i = 0; $i < count($levels) - 1; $i++) {
            $next = $i + 1;
            if (
                ($levels[$i] >= $levels[$next])
                || abs($levels[$i] - $levels[$next]) > self::MAX_DEVIATION
            ) {
                return false;
            }
        }
        return true;
    }

    protected
    function levelsSavelyDecreasing($levels)
    {
        for ($i = 0; $i < count($levels) - 1; $i++) {
            $next = $i + 1;
            if (
                ($levels[$i] <= $levels[$next])
                || abs($levels[$i] - $levels[$next]) > self::MAX_DEVIATION
            ) {
                return false;
            }
        }
        return true;
    }
}
