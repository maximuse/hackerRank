<?php
// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    $data = [];

    for ($i = 0; $i < count($arr); $i++) {
        $data[] = array_sum($arr) - $arr[$i];
    }

    echo min($data) . ' ' . max($data);
}

$stdin = fopen("input14.txt", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
