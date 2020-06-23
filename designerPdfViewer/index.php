<?php
// Complete the designerPdfViewer function below.
function designerPdfViewer($h, $word) {
    $length = strlen($word);
    $array = [];

    for($i = 0; $i < $length; $i++){
        $len = ord(strtolower($word[$i])) - 97;
        $array[$i] = $h[$len];
    }

    rsort($array);

    return $array[0] * $length;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("input00.txt", "r");

fscanf($stdin, "%[^\n]", $h_temp);

$h = array_map('intval', preg_split('/ /', $h_temp, -1, PREG_SPLIT_NO_EMPTY));

$word = '';
fscanf($stdin, "%[^\n]", $word);

echo $result = designerPdfViewer($h, $word);

//fwrite($fptr, $result . "\n");

fclose($stdin);
//fclose($fptr);
