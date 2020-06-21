<?php
// Complete the sumXor function below.
function sumXor($n) {
    return ($n > 0) ? pow(2, substr_count(decbin($n), '0')) : 1;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");
$n = intval(trim(fgets($stdin)));

echo $result = sumXor($n);

//fwrite($fptr, $result . "\n");

//fclose($fptr);
