<?php
// Complete the plusMinus function below.
function plusMinus($arr) {
    $len = count($arr);
    $result = [0, 0, 0];
    
    foreach($arr as $a) {
        $a = (int) $a;
        
        if($a === 0) {
            $result[2]++;
        }
        elseif($a > 0) {
            $result[0]++;
        }
        elseif($a < 0) {
            $result[1]++;
        }
    }
    
    $data = [
        number_format(($result[0] / $len), 6),
        number_format(($result[1] / $len), 6),
        number_format(($result[2] / $len), 6)
    ];

    echo $data[0] . PHP_EOL . $data[1] . PHP_EOL . $data[2];
}

$stdin = fopen("input01.txt", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);
