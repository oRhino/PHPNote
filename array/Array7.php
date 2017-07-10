<?php 

echo "<pre>";

echo "<hr/>";
echo "<h2>数组运算符</h2>";

echo "<h4>1.合并数组 +,如果数组键名(比如下标相同的数组元素)相同,则只会使用左边的数组的键值,而不是覆盖!</h4>";

$arr1 = ['a','b','c'];
$arr2 = ['a',11,true,'d'];

$newArr = $arr1 + $arr2;
print_r($newArr);



echo "<hr/>";


echo "<h4>2.比较数组的键名和键值是否相同 == 相同返回true,否则返回false !=相反</h4>";

$arr1 = ['id'=>1,'name'=>'zhangsan','age'=>23];
$arr2 = ['id'=>1,'age'=>23,'name'=>'zhangsan'];

$arr3 = ['id'=>2,'age'=>19,'name'=>'lisi'];
$arr4 = ['id'=>1,'name'=>'zhangsan','age'=>23];

var_dump($arr1 == $arr2); //true
var_dump($arr1 == $arr3); //false
var_dump($arr1 == $arr4); //true

var_dump($arr1 != $arr3); //true
var_dump($arr1 != $arr4); //false

echo "<hr/>";


echo "<h4>3.比较数组的键名和键值是否相同,同时顺序也要相同,即全等于 === 相同返回true,否则返回false  !== 相反</h4>";

var_dump($arr1 === $arr2); //false
var_dump($arr1 === $arr4); //true

var_dump($arr1 !== $arr2); //true
var_dump($arr1 !== $arr4); //false

echo "<hr/>";


echo "<h4>4.</h4>";


echo "<hr/>";


echo "<h4>1.</h4>";

echo "<hr/>";



echo "<pre/>";