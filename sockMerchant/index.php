<?php
// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {
    $ps = [];
    $c = 0;

    for ($i = 0; $i < $n; $i++) {
        @$ps[$ar[$i]]++;
    }

    foreach ($ps as $index => $p) {
        $c += floor($p / 2);
    }

    return $c;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

echo $result = sockMerchant($n, $ar);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
