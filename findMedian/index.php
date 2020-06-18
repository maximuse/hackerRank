<?php
// Complete the findMedian function below.
function findMedian($arr) {
    sort($arr);
    $m = floor(count($arr) / 2);

    return $arr[$m];
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

echo $result = findMedian($arr);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
