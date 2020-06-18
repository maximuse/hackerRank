<?php
// Complete the minimumNumber function below.
function minimumNumber($n, $password) {
    // Return the minimum number of characters to make the password strong
    $minLength = 6;
    $code = 0;

    if (!preg_match('#[a-z]+#', $password)) {
        $code++;
    }

    if (!preg_match('#[A-Z]+#', $password)) {
        $code++;
    }

    if (!preg_match('#[0-9]+#', $password)) {
        $code++;
    }

    if (!preg_match('/[!@#$%^&*()-+]/', $password)) {
        $code++;
    }

    if ($n < $minLength) {
        if ($n + $code >= $minLength) {
            return $code;
        }
        else {
            return $minLength - $n;
        }
    }

    return $code;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input64.txt", "r");

fscanf($stdin, "%d\n", $n);

$password = '';
fscanf($stdin, "%[^\n]", $password);

echo $answer = minimumNumber($n, $password);

//fwrite($fptr, $answer . "\n");

fclose($stdin);
//fclose($fptr);
