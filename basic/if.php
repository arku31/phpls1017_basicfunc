<?php
$a = 1;
if ($a == 1) {
    echo $a++;
} elseif ($a % 2 == 0) {
    echo ++$a;
} else {
    echo 'какоето вообще число';
}

//$result = ($a == 1) ? 'один' : 'не один';

//echo $result;

switch ($a) {
//    default:
//        echo "не один и не два";
//        break;
    case 1:
    default:
        echo 'один';
        break;
    case 2:
        echo "два";
        break;
}

$bbb[0] = '123';
$bbb[2] = 123;
$bbb[] = 'sdfgsdf';
$bbb[] = $bbb;
$bbb['user']['name'] = "Igor";
$bbb['user']['surname'] = "T";

print_r($bbb);
echo count($bbb['user']); //.length


$str = explode('.', '1 2.3');
print_r($str);
