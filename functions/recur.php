<?php

function recur($x)
{
    echo $x;
    if ($x < 10) {
        recur(++$x);
    }
}

//recur(0);

$asd = 123;
$anon = function ($a) use ($asd) {
    return $asd;
};
echo $anon(1);


