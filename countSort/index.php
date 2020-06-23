<?php
// Complete the countSort function below.

function countSort($arr) {
    //var_dump($arr);

    sort($arr);

    //var_dump($arr);

    $result = '';
    $dash = ['ab', 'cd', 'ef', 'gh', 'ij'];

    foreach ($arr as $a) {
        if (in_array($a[1], $dash)) {
            $a[1] = '-';
        }

        $result .= $a[1] . ' ';
    }

    echo $result;
}

$stdin = fopen("input00.txt", "r");
$n = intval(trim(fgets($stdin)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets($stdin));

    $arr[] = preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY);
}

countSort($arr);
