<?php
// Complete the extraLongFactorials function below.
function extraLongFactorials($n) {
    echo gmp_fact($n);
}

$stdin = fopen("input00.txt", "r");

fscanf($stdin, "%d\n", $n);

extraLongFactorials($n);

fclose($stdin);
