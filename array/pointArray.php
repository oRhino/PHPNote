<?php  


echo '<pre>';
echo '<h2>数组指针相关函数</h2>';


echo '<hr/>';

echo '<h4>1.key($array)得到当前指针所在的位置的键名,如果不存在返回null,current($array)得到当前指针所在位置的键值,如果不存在返回false</h4>';
$users = ['name'=>'lisi','age'=>22,'class'=>'三年二班','score'=>127];

echo '当前指针位置的键名:',key($users),'<br/>';
echo '当前指针位置的键值:',current($users),'<br/>';



echo '<hr/>';

echo '<h4>2.next($array):将数组指针向下移动一位,并且返回当前指针所在位置的键值,如果没有,返回false
</h4>';

echo next($users),'<br/>';
echo '当前指针位置的键名:',key($users),'<br/>';
echo '当前指针位置的键值:',current($users),'<br/>';

echo next($users),'<br/>';
echo '当前指针位置的键名:',key($users),'<br/>';
echo '当前指针位置的键值:',current($users),'<br/>';

echo next($users),'<br/>';
echo '当前指针位置的键名:',key($users),'<br/>';
echo '当前指针位置的键值:',current($users),'<br/>';

var_dump(next($users));
echo '当前指针位置的键名:',key($users),'<br/>';
echo '当前指针位置的键值:',current($users),'<br/>';

echo '<hr/>';

echo '<h4>3. prev($array):将数组指针向上移动一位,并且返回当前指针所在位置的键值,如果没有,返回false</h4>';

echo end($users),'<br/>';

echo prev($users),'<br/>';
echo '当前指针位置的键名:',key($users),'<br/>';
echo '当前指针位置的键值:',current($users),'<br/>';


echo prev($users),'<br/>';
echo '当前指针位置的键名:',key($users),'<br/>';
echo '当前指针位置的键值:',current($users),'<br/>';

echo prev($users),'<br/>';
echo '当前指针位置的键名:',key($users),'<br/>';
echo '当前指针位置的键值:',current($users),'<br/>';

echo prev($users),'<br/>';
echo '当前指针位置的键名:',key($users),'<br/>';
echo '当前指针位置的键值:',current($users),'<br/>';

echo '<hr/>';

echo '<h4>4.reset($array):将数组指针移动到数组开始,并且返回当前指针位置所在位置的键值,若果没有,返回false</h4>';

echo reset($users),'<br/>';

echo '当前指针位置的键名:',key($users),'<br/>';
echo '当前指针位置的键值:',current($users),'<br/>';


echo '<hr/>';

echo '<h4>5.end($array):将数组指针移动到数组末尾,并且返回当前指针位置所在位置的键值,若果没有,返回false.</h4>';

echo end($users),'<br/>';

echo '当前指针位置的键名:',key($users),'<br/>';
echo '当前指针位置的键值:',current($users),'<br/>';

echo '<hr/>';

echo '<h4>6.通过指针函数遍历数组:</h4>';

$array = ['c',null,null => false,0,''=>'naxx','22332',222];
print_r($array);

//不对的,有的值正好是false,0,null
while (current($array)) {	
	echo '当前指针位置的键名:',key($array),'<br/>';
	echo '当前指针位置的键值:',current($array),'<br/>';
	next($array);
}
reset($array);

echo '<hr/>';

while (!is_null(key($array))) {	
	echo '当前指针位置的键名:',key($array),'<br/>';
	echo '当前指针位置的键值:',current($array),'<br/>';
	echo "<br/>";
	next($array);
}

echo '<hr/>';

echo '<h4>7.end() 取得文件扩展名</h4>';

$filename = '1229293.2xxx.php';
$arrs = explode('.', $filename);
print_r($arrs);
$extesion = end($arrs);
echo $extesion;



echo '<pre/>';