<?php

echo '<pre>';
echo '<hr/>';


echo '<h4>1.动态创建数组</h4>';
$arr[] = 'a';
$arr[] = true;
$arr[] = 19929.4;
print_r($arr);

echo '<hr/>';

echo '<h4>2.手动指定下标的索引数组 如果不换变量名这种方式是动态添加的</h4>';
$arr1[3] = '3';
$arr1[-3] = 233;
$arr1[0] = false;
$arr1[] = '这个下标是几? 4'; 
print_r($arr1);

echo '<hr/>';

echo '<h4>3.动态创建关联数组</h4>';
$arr2['this'] = false;
$arr2['userName'] = 'lisi';
$arr2['age'] = 35;
$arr2[] = "jj";
print_r($arr2);


echo '<hr/>';

echo '<h4>4.二维数组 索引+关联</h4>';
$arr3[] = ['id'=>1,'name'=>'xiaosan','age'=>42];
$arr3[] = ['id'=>2,'name'=>'xiaohong','age'=>23];
$arr3[] = ['id'=>3,'name'=>'wolf','age'=>22];
$arr3[] = ['id'=>4,'name'=>'brother','age'=>47];
print_r($arr3);

echo '<hr/>';
echo '<h4>5.二维数组 关联+关联</h4>';

$arr4['course'] = ['courseName'=>'php','courseDesc'=>'PHP是世界上最好的语言'];
$arr4['works'] = ['job'=>'屌丝','task'=>'撩妹'];

print_r($arr4);

echo '<hr/>';
$arr5[][1] = 2;
print_r($arr5);



echo '<pre>';

