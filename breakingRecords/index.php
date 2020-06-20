<?php
// Complete the breakingRecords function below.
function breakingRecords($scores) {
    $min = $scores[0];
    $max = $scores[0];
    $minCounter = 0;
    $maxCounter = 0;

    foreach ($scores as $score) {
        if ($min > $score) {
            $min = $score;
            $minCounter++;
        }

        if ($max < $score) {
            $max = $score;
            $maxCounter++;
        }
    }

    return [$maxCounter, $minCounter];
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $scores_temp);

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);
var_dump($result);

//fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
//fclose($fptr);
