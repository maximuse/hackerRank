<?php
/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */
function gradingStudents($grades) {
    // Write your code here
    $result = [];

    foreach ($grades as $grade) {
        if ($grade >= 38) {
            $n = 0;

            while (($grade + $n) % 5 != 0) {
                $n++;
            }

            $result[] = ($n < 3) ? ($grade + $n) : $grade;
        }
        else {
            $result[] = $grade;
        }
    }

    return $result;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");
$grades_count = intval(trim(fgets($stdin)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets($stdin)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);
var_dump($result);

//fwrite($fptr, implode("\n", $result) . "\n");

//fclose($fptr);
