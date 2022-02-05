<?php

$n = 1;

$m = 100;

for ($i = $n; $i <= $m; $i++) {
    sakumas($i);
}

function sakumas($num)
{

    if ($num % 3 == 0 && $num % 7 == 0) {
        echo "sakumas, ";
    } elseif ($num % 3 == 0) {
        echo "saku, ";
    } elseif ($num % 7 == 0) {
        echo "mas, ";
    } else {
        echo $num . ", ";
    }
}
