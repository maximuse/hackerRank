<?php
// Complete the introTutorial function below.
function introTutorial($V, $arr) {
    $p = 0;

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $V) {
            $p = $i;
            break;
        }
    }

    return $p;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");

fscanf($stdin, "%d\n", $V);

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

echo $result = introTutorial($V, $arr);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
