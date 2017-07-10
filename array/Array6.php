<?php 

echo "<pre>";

echo "<hr/>";
echo "<h2>其他类型转换为数组</h2>";

echo "<h4>1.临时转换</h4>";

$var = 123;
$res = (array)$var;
var_dump($res);
var_dump($var);

echo("<br/>");
echo("<br/>");

$var = 123.2222;
$res = (array)$var;
var_dump($res);
var_dump($var);


$var = true;
$res = (array)$var;
var_dump($res);
var_dump($var);

echo("<br/>");
echo("<br/>");

echo "<h4>null是转换成空数组</h4>";
$var = null;
$res = (array)$var;
var_dump($res);
var_dump($var);

echo "<hr/>";

echo "<h4>2.永久转换</h4>";

$var = 234;
settype($var, 'array');
var_dump($var);



echo "<pre/>";

 ?>