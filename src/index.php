<?php
declare(strict_types=1);

namespace AOC2024;

require __DIR__ . '/../vendor/autoload.php';

for ($day = 1; $day <= 2; $day++) {
    $puzzleA = 'AOC2024\Day' . $day . '\puzzleA';
    $puzzleB = 'AOC2024\Day' . $day . '\puzzleB';
    echo 'Day '.$day.' A solved:' . PHP_EOL;
    echo (new $puzzleA())->solve();
    echo '<br>Day '.$day.' B solved:' . PHP_EOL;
    echo (new $puzzleB())->solve();
    echo '<hr>';
}


