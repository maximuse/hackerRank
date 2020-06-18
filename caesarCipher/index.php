<?php
// Complete the caesarCipher function below.
/**
 * @param $s: a string in cleartext
 * @param $k: an integer, the alphabet rotation factor
 */
function caesarCipher($s, $k) {
    $result = '';

    for($i = 0; $i < strlen($s); $i++) {
        if(!ctype_alpha($s[$i])) {
            $result .= $s[$i];
            continue;
        }
        else if(ctype_upper($s[$i])) {
            $result .= chr((ord($s[$i]) + $k - 65) % 26 + 65);
        }
        else {
            $result .= chr((ord($s[$i]) + $k - 97) % 26 + 97);
        }
    }

    return $result;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input11.txt", "r");

fscanf($stdin, "%d\n", $n);

$s = '';
fscanf($stdin, "%[^\n]", $s);

fscanf($stdin, "%d\n", $k);

echo $result = caesarCipher($s, $k);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
