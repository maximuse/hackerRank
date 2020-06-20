<?php
// Complete the pangrams function below.
function pangrams($s) {
    echo $s . '<br>';

    $s = mb_strtolower($s);
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $letters = [];

    for ($i = 0; $i < strlen($s); $i++) {
        if (strpos($alphabet, $s[$i]) !== false) {
            if (!in_array($s[$i], $letters)) {
                $letters[] = $s[$i];
            }
        }
    }

    return (count($letters) == 26) ? 'pangram' : 'not pangram';
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

echo $result = pangrams($s);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
