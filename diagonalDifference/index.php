<?php
/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */
function diagonalDifference($arr) {
    // Write your code here
    $length = count($arr);
    $ltr = 0;
    $rtl = 0;

    for ($i = 0; $i < $length; $i++) {
            $ltr += $arr[$i][$i];
            $rtl += $arr[$i][$length - 1 - $i];
    }

    return abs($ltr - $rtl);
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");
$n = intval(trim(fgets($stdin)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets($stdin));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

echo $result = diagonalDifference($arr);

//fwrite($fptr, $result . "\n");

//fclose($fptr);
