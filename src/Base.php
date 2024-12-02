<?php

namespace AOC2024;
abstract class Base implements IBase
{

    protected const INPUT_FILE_PATH = '"/Day%s/input"';

    protected int $day;
    protected string $input;


    public function getInput(): string
    {
        return $this->input;
    }

    public function setInput(string $input): void
    {
        $this->input = $input;
    }

    public function __construct()
    {
        $puzzleDirFile = __DIR__ . sprintf(self::INPUT_FILE_PATH, $this->day);
        if (!file_exists($puzzleDirFile)) {
            throw new \Exception($puzzleDirFile . " does not exist");
        }
        $input = trim(file_get_contents($puzzleDirFile));
        $this->setInput($input);
    }
}