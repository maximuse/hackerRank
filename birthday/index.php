<?php
// Complete the birthday function below.
function birthday($s, $d, $m) {
    $l = count($s);
    $n = 0;

    if ($m == 1) {
        for ($i = 0; $i < $l; $i++) {
            if ($s[$i] == $d) {
                $n++;
            }
        }
    }
    else {
        for ($i = 0; $i < $l - $m + 1; $i++){
            $sum = 0;

            for ($j = $i; $j < $i + $m; $j++){
                $sum += $s[$j];
            }

            if ($sum == $d){
                $n++;
            }
        }
    }

    return $n;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");
$n = intval(trim(fgets($stdin)));

$s_temp = rtrim(fgets($stdin));

$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

$dm = explode(' ', rtrim(fgets($stdin)));

$d = intval($dm[0]);

$m = intval($dm[1]);

echo $result = birthday($s, $d, $m);

//fwrite($fptr, $result . "\n");

//fclose($fptr);
