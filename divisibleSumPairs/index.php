<?php
// Complete the divisibleSumPairs function below.
function divisibleSumPairs($n, $k, $ar) {
    $c = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i < $j) {
                if (($ar[$i] + $ar[$j]) % $k == 0) {
                    $c++;
                }
            }
        }
    }

    return $c;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

echo $result = divisibleSumPairs($n, $k, $ar);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
