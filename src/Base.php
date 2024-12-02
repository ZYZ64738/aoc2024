<?php

namespace AOC2024;
abstract class Base implements IBase
{
    public const INPUT_FILE_NAME = 'input';
    protected string $input;

    public function getInput(): string
    {
        return $this->input;
    }

    public function setInput(string $input): void
    {
        $this->input = $input;
    }

    public function __construct(int $day)
    {
        $puzzleDirFile = __DIR__ . "/Day" . $day . "/input";
        if (!file_exists($puzzleDirFile)) {
            throw new \Exception($puzzleDirFile . " does not exist");
        }
        $input = file_get_contents($puzzleDirFile);
        $this->setInput($input);
    }
}