<?php
//start
$n = 1;

//end
$m = 100;
//loop for the function defined below
for ($i = $n; $i <= $m; $i++) {
    sakumas($i);
}

function sakumas($num)
{
    //cek if the number can be divided by 3 and 7
    if ($num % 3 == 0 && $num % 7 == 0) {
        echo "sakumas, ";
    }
    //cek if the number can be divided by 3
    elseif ($num % 3 == 0) {
        echo "saku, ";
    }
    //cek if the number can be divided by 7
    elseif ($num % 7 == 0) {
        echo "mas, ";
    } else {
        echo $num . ", ";
    }
}
