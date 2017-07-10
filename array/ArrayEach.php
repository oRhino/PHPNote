<?php 

echo '<pre>';
echo '<h2>数组的遍历</h2>';

echo '<h4>1.数组的遍历 普通的for循环 (对于下标不连续的不适用)</h4>';

$arr = range('a','z');
for ($i=0; $i <25; $i++) { 
	echo $arr[$i],'<br/>';
}

echo '<hr/>';


echo '<h4>2.数组的个数 count($var) 注:如果不是数组类型</h4>';

echo count($arr),'<br/>';

$var = 123;  //1
echo count($var),'<br/>';

$var = null; //0
echo count($var),'<br/>';

$var = true; //1
echo count($var),'<br/>';

$var = false; //1
echo count($var),'<br/>';

for ($i=0; $i <count($arr)-1; $i++) { 
	echo $arr[$i],'<br/>';
}

echo '<hr/>';


echo '<h4>3.数组的遍历 foreach遍历数组,对象</h4>';

echo '<p>
方式1:
foreach ($variable as $value) {
	# code...
}
<br/>
方式2:
foreach ($variable as $key => $value) {
	# code...
}
<p/>
';

$arr = [
5=>'a',
12=>'b',
-123=>'c',
'age'=>20,
34=>'d',
'userName'=>'lisi',
];

foreach ($arr as $value) {
	echo $value,'<br/>';
}
foreach ($arr as $key => $value) {
	echo $key,' => ',$value,'<br/>';
}

echo $key,' _____ ',$value,'<br/>';

echo '<hr/>';

echo '<h4>5.二维数组的遍历</h4>';

$users = [
      ['id'=>12223,'username'=>'queen','age'=>24],
      ['id'=>23333,'username'=>'allen','age'=>34],
      ['id'=>32222,'username'=>'crush','age'=>54],
      ['id'=>40001,'username'=>'queen3','age'=>52],
      ['id'=>00001,'username'=>'queen4','age'=>23],
      ['id'=>33331,'username'=>'queen5','age'=>98]
    ];

foreach ($users as $user) {
	echo '编号: ',$user['id'],'<br/>';
	echo '姓名:',$user['username'],'<br/>';
	echo '年龄:',$user['age'],'<br/>';
}


echo '<hr/>';

foreach ($users as $key => $value) {
	
	if (is_array($value)) {
		foreach ($value as $subvalue) {
		echo $subvalue,'<br/>';
	   }
	}
	echo '<hr/>';
}

echo '<hr/>';

echo '<h4>6.php7 :endforeach</h4>';

$arr = ['a','b','c'];

foreach ($arr as $key => $value):
	echo $key,'----',$value,'<br/>';
endforeach;

echo '<hr/>';



echo '<h4>7.foreach不再改变内部数组指针</h4>';
$arr = ['a','b',3,false];

foreach ($arr as $key => $value) {
	var_dump(current($arr));
}


echo '<hr/>';

echo '<h4>8.foreach 通过值遍历时,操作的值是数组的副本 (有待考证~!!!!!)</h4>';

$arr = [1,'www','22',false];

foreach ($arr as $value) {
	echo $value,'<br/>';
	unset($arr[0]);
}
var_dump($arr);


echo '<hr/>';

echo '<h4>9.在循环中改变数组 用&表示通过引用遍历,有更好的迭代性</h4>';

$arr = [1,'www'];

//输出两个元素
foreach ($arr as $value) {
	echo $value,'<br/>';
	$arr[2] = 'b';
}
print_r($arr);

$arr = [1,'www'];
//输出三个元素
foreach ($arr as &$value) {
	echo $value,'<br/>';
	$arr[2] = 'b';
}
print_r($arr);

echo '<hr/>';
echo '<h4>10.(实力打脸,测试可用)$value 的引用仅在被遍历的数组可以被引用时才可用（例如是个变量）。以下代码则无法运行</h4>';

foreach (array(1, 2, 3, 4) as &$value) {
    $value = $value * 2;
    echo $value,'<br/>';
}

echo '<pre/>';