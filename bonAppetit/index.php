<?php
// Complete the bonAppetit function below.
function bonAppetit($bill, $k, $b) {
    $x = (array_sum($bill) - $bill[$k]) / 2;

    echo ($b == $x) ? 'Bon Appetit' : $b - $x;
}

$stdin = fopen("input00.txt", "r");
$nk = explode(' ', rtrim(fgets($stdin)));

$n = intval($nk[0]);

$k = intval($nk[1]);

$bill_temp = rtrim(fgets($stdin));

$bill = array_map('intval', preg_split('/ /', $bill_temp, -1, PREG_SPLIT_NO_EMPTY));

$b = intval(trim(fgets($stdin)));

bonAppetit($bill, $k, $b);
