<?php
// Complete the hurdleRace function below.
function hurdleRace($k, $height) {
    $x = $height[0];

    for ($i = 1; $i < count($height); $i++) {
        if ($height[$i] > $x) {
            $x = $height[$i];
        }
    }

    return ($k > $x) ? 0 : ($x - $k);
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $height_temp);

$height = array_map('intval', preg_split('/ /', $height_temp, -1, PREG_SPLIT_NO_EMPTY));

echo $result = hurdleRace($k, $height);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
