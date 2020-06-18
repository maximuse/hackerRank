<?php
// Complete the insertionSort2 function below.
function insertionSort2($n, $arr) {
    $result = '';

    for ($i = 1; $i < $n; $i++) {
        $k = $arr[$i];
        $j = $i - 1;

        while ($j > -1 && $arr[$j] > $k) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }

        $arr[$j + 1] = $k;

        for ($j = 0; $j < $n; $j++) {
            $result .= $arr[$j] . ' ';
        }

        //$result .= PHP_EOL;
        $result .= '<br />' . PHP_EOL;
    }

    echo $result;
}

$stdin = fopen("input05.txt", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort2($n, $arr);

fclose($stdin);
