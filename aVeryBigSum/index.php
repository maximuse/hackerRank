<?php
// Complete the aVeryBigSum function below.
function aVeryBigSum($ar) {
	array_walk($ar, 'intval');
    return array_sum($ar);
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

echo $result = aVeryBigSum($ar);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
