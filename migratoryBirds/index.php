<?php
// Complete the migratoryBirds function below.
function migratoryBirds($arr) {
    $types = [0, 0, 0, 0, 0];

    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($types); $j++) {
            if ($arr[$i] == $j + 1) {
                $types[$j]++;
            }
        }
    }

    asort($types);
    $rtypes = array_reverse($types);

    if ($rtypes[0] > $rtypes[1]) {
        for ($i = 0; $i < count($rtypes); $i++) {
            if ($rtypes[0] == $types[$i]) {
                return $i + 1;
            }
        }
    }
    else {
        for ($i = 0; $i < count($rtypes); $i++) {
            if ($rtypes[0] == $types[$i]) {
                return $i + 1;
            }
        }
    }
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");
$arr_count = intval(trim(fgets($stdin)));

$arr_temp = rtrim(fgets($stdin));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

echo $result = migratoryBirds($arr);

//fwrite($fptr, $result . "\n");

//fclose($fptr);
