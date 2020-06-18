<?php
/*
 * Complete the timeConversion function below.
 */
function timeConversion($s) {
    /*
     * Write your code here.
     */
     return DateTime::createFromFormat('h:i:s A', $s)->format('H:i:s');
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("input00.txt", "r");

fscanf($__fp, "%[^\n]", $s);

echo $result = timeConversion($s);

//fwrite($fptr, $result . "\n");

fclose($__fp);
//fclose($fptr);
