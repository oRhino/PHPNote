<?php 

echo '<pre>';
echo '<h2>each && list</h2>';


echo '<hr/>';

echo '<h4>1.each()返回数组中当前的键/值对,并将数组指针向前移动一步,返回的是一个包含四个元素的数组,键名为0,1,key,value,0和key对应的是当前指针对应的键名,1和value对应的是当前指针对应的键值.如果当前指针不在数组范围中,返回false</h4>';

$foo = array('name'=>"bob", "fred",233);

$bar = each($foo);
print_r($bar);

echo '当前指针位置的键名:',key($foo),'<br/>';
echo '当前指针位置的键值:',current($foo),'<br/>';

$bar = each($foo);
echo '当前指针位置的键名:',key($foo),'<br/>';
echo '当前指针位置的键值:',current($foo),'<br/>';

$bar = each($foo);
echo '当前指针位置的键名:',key($foo),'<br/>';
echo '当前指针位置的键值:',current($foo),'<br/>';

var_dump(each($foo));


echo '<hr/>';

echo '<h4>2.list()把数组中的值赋给一组变量,感觉类似于ES6的解构赋值</h4>';

$info = array('coffee', 'brown', 'caffeine');

// 列出所有变量
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

// 列出他们的其中一个
list($drink, , $power) = $info;
echo "$drink has $power.\n";

// 或者让我们跳到仅第三个
list(,,$power) = $info;
echo "I need $power!\n";

// list() 不能对字符串起作用
list($bar) = "abcde";
var_dump($bar); // NULL


echo '<hr/>';

echo '<h4>2.1 list() 嵌套元素</h4>';
list($a,list($b,$c)) = array('apple',['hello',23]);
var_dump($a,$b,$c);


echo '<hr/>';

echo '<h4>2.2 list() 使用数组索引 php5和php7的顺序不一样,php7从左到右,php5相反</h4>';
list($arr[0],list($arr[1],$arr[2])) = array('apple',['hello',23]);
var_dump($arr);


echo '<hr/>';

echo '<h4>2.3 list() []</h4>';
list($a) = array();
var_dump($a);

list(,,$a) = array();
var_dump($a);

echo '<hr/>';


echo '<h4>2.4 list()循环[]</h4>';

$arr = [
['name'=>"adson",'age'=>22,'sex'=>true],
['name'=>"adson1",'age'=>23,'sex'=>true],
['name'=>"adson3",'age'=>24,'sex'=>true],
['name'=>"adson4",'age'=>25,'sex'=>true]
];
foreach ($arr as list($name,$age,$sex)) {
	echo $name,'---',$age,'---',$sex,'<br/>';
}

$arrs = [
['aleen',23,true],
['alex',24,false],
['lisa',21,true]
];
foreach ($arrs as list($name,$age,$sex)) {
	echo $name,'---',$age,'---',$sex,'<br/>';
}


echo '<hr/>';

echo '<h4>3.each() list()遍历数组</h4>';

$fruit = array(
	'a' => 'apple', 
	'b' => 'banana', 
	'c' => 'cranberry'
	);

reset($fruit);
while (list($key, $val) = each($fruit)) {
    echo "$key => $val\n";
}

echo '<hr/>';

echo '<h4>4.caution:将一个数组赋值给另一个数组时会重置原来的数组指针,导致死循环</h4>';

// reset($fruit);
// while (list($key, $val) = each($fruit)) {
//     echo "$key => $val\n";
//     //重新赋值
//     $fruit = ['x'];
// }


echo '<hr/>';

echo '<h4></h4>';



echo '<pre/>';

