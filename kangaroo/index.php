<?php
// Complete the kangaroo function below.
function kangaroo($x1, $v1, $x2, $v2) {
    return ($v1 > $v2 && !(($x2 - $x1) % ($v1 - $v2))) ? 'YES' : 'NO';
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input01.txt", "r");

fscanf($stdin, "%[^\n]", $x1V1X2V2_temp);
$x1V1X2V2 = explode(' ', $x1V1X2V2_temp);

$x1 = intval($x1V1X2V2[0]);

$v1 = intval($x1V1X2V2[1]);

$x2 = intval($x1V1X2V2[2]);

$v2 = intval($x1V1X2V2[3]);

echo $result = kangaroo($x1, $v1, $x2, $v2);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
