<?php 
error_reporting(E_ALL);


echo "<pre>";

$arr = ['a','b','c',];
foreach ($arr as $key => &$value) {
	$value = $value.'_'.$value;
	echo $value.'<br/>';
}
print_r($arr);
var_dump($value);

echo "<hr/>";
foreach ($arr as $key => $value) {
	echo $value.'<br/>';
	print_r($arr);
}
echo "<hr/>";
print_r($arr);


echo "<pre/>";