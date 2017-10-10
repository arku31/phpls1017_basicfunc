<?php
////echo 'test';
//
//echo "test" . PHP_EOL;
//echo "test" . PHP_EOL;
//echo "test" . PHP_EOL;
//echo "test" . PHP_EOL;
//
////echo ("test","test"); //ошибка
//echo("test" . "test".PHP_EOL);
//
$string = filter_var('123d4', FILTER_SANITIZE_NUMBER_INT);

$integer= (int)$string;

var_dump($integer);
var_dump($string);



//echo ($string + $integer);
die();
//$a = 0;
//echo ++$a;
//echo $a;
//echo PHP_EOL;
//$a = 0;
//echo $a++;
//echo $a;
$a['a'] = 123;

//echo "Stroka: ".$a['a'];
//$a = null;
//$result = isset($a);
//var_dump($result);
$a = '';
$result = empty($a);
echo 'is_empty: '. empty($a).PHP_EOL;
echo 'is_isset'. isset($a);
//var_dump($result);

define('ASD', 'что-нибудь');
const ASDD = 'asd';
echo ASDD;
echo ASD;