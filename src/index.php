<?php
declare(strict_types=1);

namespace AOC2024;

require __DIR__ . '/../vendor/autoload.php';

for ($day = 1; $day <= 2; $day++) {
    $puzzle = 'AOC2024\Day' . $day . '\puzzleA';
    echo 'Day '.$day.' A solved:' . PHP_EOL;
    (new $puzzle())->solve();
    $puzzle = 'AOC2024\Day' . $day . '\puzzleB';
    echo '<br>Day '.$day.' B solved:' . PHP_EOL;
    (new $puzzle())->solve();
    echo '<br>';
}


