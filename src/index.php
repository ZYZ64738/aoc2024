<?php
declare(strict_types=1);

namespace AOC2024;

require __DIR__ . '/../vendor/autoload.php';

$firstDay = 3;
$lastDay = 3;

for ($day = $firstDay; $day <= $lastDay; $day++) {
    $puzzleA = 'AOC2024\Day' . $day . '\PuzzleA';
    $puzzleB = 'AOC2024\Day' . $day . '\PuzzleB';
    echo 'Day '.$day.' A solved:' . PHP_EOL;
    echo (new $puzzleA())->solve();
    echo '<br>Day '.$day.' B solved:' . PHP_EOL;
    echo (new $puzzleB())->solve();
    echo '<hr>';
}


