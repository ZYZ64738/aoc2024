<?php

namespace AOC2024;
interface IBase
{
    public function setInput(string $input): void;

    public function getInput(): string;

    public function getInputCsv(string $seaparator): array;

    public function solve(): void;
}