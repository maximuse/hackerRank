<?php
/*
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */
function getTotalX($a, $b) {
    // Write your code here $isDivisible
    $minB  = min($b);
    $maxA  = max($a);
    $count = 0;
    $isDivisible = false;

    if ($minB >= $maxA) {
        while ($minB >= $maxA) {
            $isDivisible = false;

            foreach($b as $value) {
                if ($value % $minB) {
                    $isDivisible = true;
                    break;
                }
            }

            if (!$isDivisible) break;

            $minB = round($minB / 2);
        }

        if (!$isDivisible) {
            $nums = [$minB];

            for ($i = $minB - 1; $i > 0; $i--) {
                if (!($minB % $i)) $nums[] = $i;
                if ($i < $maxA) break;
            }

            foreach($nums as $num) {
                $isDivisible = false;

                foreach($a as $value) {
                    if ($num % $value) {
                        $isDivisible = true;
                        break;
                    }
                }

                if (!$isDivisible) $count++;
            }
        }
    }

    return $count;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");
$first_multiple_input = explode(' ', rtrim(fgets($stdin)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets($stdin));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$brr_temp = rtrim(fgets($stdin));

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

echo $total = getTotalX($arr, $brr);

//fwrite($fptr, $total . "\n");

//fclose($fptr);
