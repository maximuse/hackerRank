<?php
// Complete the sumXor function below.
function sumXor($n) {
    $c = 0;

    for ($i = 0; $i < $n; $i++) {
        //if (($n + $i) == (variant_xor($n, $i))) {
        if (($n + $i) == ($n ^ $i)) {
            $c++;
        }
    }

    return $c;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");
$n = intval(trim(fgets($stdin)));

echo $result = sumXor($n);

//fwrite($fptr, $result . "\n");

//fclose($fptr);
