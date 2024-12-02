<?php
declare(strict_types=1);

namespace AOC2024\Day2;
final class PuzzleB extends Puzzle
{
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
        $failureTolerance = 0;
        for ($i = 0; $i < count($levels) - 1; $i++) {
            $next = $i + 1;
            if (
                ($levels[$i] >= $levels[$next])
                || abs($levels[$i] - $levels[$next]) > 3
            ) {
                if ($failureTolerance > 0) {
                    return false;
                }
                $failureTolerance++;
            }
        }
        return true;
    }

    protected
    function levelsSavelyDecreasing($levels)
    {
        $failureTolerance = 0;
        for ($i = 0; $i < count($levels) - 1; $i++) {
            $next = $i + 1;
            if (
                ($levels[$i] <= $levels[$next])
                || abs($levels[$i] - $levels[$next]) > 3
            ) {
                if ($failureTolerance > 0) {
                    return false;
                }
                $failureTolerance++;
            }
        }
        return true;
    }
}