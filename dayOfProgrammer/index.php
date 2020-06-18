<?php
// Complete the dayOfProgrammer function below.
function dayOfProgrammer($year) {
    /*if (DateTime::createFromFormat('Y', $year)->format('L') === "1") {
        return DateTime::createFromFormat('z Y', strval(254) . ' ' . strval($year))->format('d.m.Y');
    }
    else {
        return DateTime::createFromFormat('z Y', strval(255) . ' ' . strval($year))->format('d.m.Y');
    }*/

    if ($year == 1918) {
        return '26.09.1918';
    }
    else {
        if (($year < 1918 && $year % 4 == 0) || ($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
            return '12.09.' . $year;
        }
        else {
            return '13.09.' . $year;
        }
    }
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input60.txt", "r");
$year = intval(trim(fgets($stdin)));

echo $result = dayOfProgrammer($year);

//fwrite($fptr, $result . "\n");

//fclose($fptr);
