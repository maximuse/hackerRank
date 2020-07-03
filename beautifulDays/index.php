<?php
// Complete the beautifulDays function below.
function beautifulDays($i, $j, $k) {
    $s = 0;

    for ($a = $i; $a <= $j; $a++) {
        $n = $a;
        $r = 0;

        while ($n > 0) {
            $r *= 10;
            $r += $n % 10;
            $n = (int)($n / 10);
        }

        $r = ($a - $r) / $k;

        if (!is_float($r)){
            $s++;
        }
    }

    return $s;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input08.txt", "r");

fscanf($stdin, "%[^\n]", $ijk_temp);
$ijk = explode(' ', $ijk_temp);

$i = intval($ijk[0]);

$j = intval($ijk[1]);

$k = intval($ijk[2]);

echo $result = beautifulDays($i, $j, $k);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
