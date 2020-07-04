<?php
/*
 * Complete the pageCount function below.
 */
function pageCount($n, $p) {
    // Write your code here.
    if ($n % 2 == 0)
        return (int) min(($p / 2), ($n / 2 - $p / 2 + 1 / 2));
    else
        return (int) min(($p / 2), ($n / 2 - $p / 2));
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input26.txt", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%d\n", $p);

echo $result = pageCount($n, $p);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
