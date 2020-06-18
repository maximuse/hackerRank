<?php
// Complete the camelcase function below.
function camelcase($s) {
    $r = preg_replace("([A-Z])", " $0", $s);
    $a = explode(' ', $r);

    return count($a);
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

echo $result = camelcase($s);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
