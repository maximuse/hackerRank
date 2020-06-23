<?php
// Complete the catAndMouse function below.
function catAndMouse($x, $y, $z) {
    return (abs($x - $z) < abs($y - $z)) ? "Cat A" : (abs($x - $z) > abs($y - $z)) ? "Cat B" : "Mouse C";
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%[^\n]", $xyz_temp);
    $xyz = explode(' ', $xyz_temp);

    $x = intval($xyz[0]);

    $y = intval($xyz[1]);

    $z = intval($xyz[2]);

    echo $result = catAndMouse($x, $y, $z);

    //fwrite($fptr, $result . "\n");
}

fclose($stdin);
//fclose($fptr);
