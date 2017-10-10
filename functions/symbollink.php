<?php
$x = 10;

function moreAge(&$x) {
    $x++;
    echo $x.PHP_EOL;
}
moreAge($x);
echo $x.PHP_EOL;


function getArray() {
    return [1,2,3];
}


echo "<pre>";
$arr = getArray();
print_r($arr);
die();