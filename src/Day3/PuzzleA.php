<?php
declare(strict_types=1);

namespace AOC2024\Day3;
final class PuzzleA extends Puzzle
{
    public function solve(): int
    {
        $res = 0;
        $code = $this->getInput();
        $patternCall = '/mul\([0-9]{1,3},[0-9]{1,3}\)/';
        $patternArgs = '/^mul\(([0-9]+),([0-9]+)\)$/';
        preg_match_all($patternCall, $code, $matches);
        foreach ($matches[0] as $call) {
            preg_match($patternArgs, $call, $matches);
            $res += (int)$matches[1] * (int)$matches[2];
        }
        return $res;
    }
}
