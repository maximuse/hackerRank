<?php
// Complete the staircase function below.
function staircase($n) {
    $staircase = '';

    for($i = 0; $i < $n; $i++) {
        for($j = 0; $j < ($n - 1 - $i); $j++) {
            $staircase .= " ";
        }

        for($k = 0; $k < ($i + 1); $k++) {
            $staircase .= "#";
        }

        $staircase .= PHP_EOL;
    }

    echo $staircase;
}

$stdin = fopen("input01.txt", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
