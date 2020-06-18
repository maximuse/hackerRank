<?php
// Complete the viralAdvertising function below.
function viralAdvertising($n) {
    $sum = floor(5 / 2);
    $sumInDay = floor(5 / 2);

    for($i = 2; $i <= $n; $i++) {
        $sumInDay = floor($sumInDay * 3 / 2);
        $sum += $sumInDay;
    }

    return $sum;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input01.txt", "r");

fscanf($stdin, "%d\n", $n);

echo $result = viralAdvertising($n);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
