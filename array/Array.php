<?php 

header('content-type:text/html;charset=utf-8');

// phpinfo()
// 
//空数组
$arr = array();
//检测是否是空数组
var_dump($arr);
//gettype得到变量的类型
echo gettype($arr);
//通过is_array(),检测变量是否为数组
var_dump(is_array($arr));

echo '<hr/>';

//通过array()下标连续的数组
$arr =array(2,3,4,'king',true);
print_r($arr);

echo '<hr/>';

//手动指定下标的
$arr = array(
	 3=>'a',
	 5=>'b',
	'6'=>'c'
	);
print_r($arr);

echo '<hr/>';

//定义关联数组
$userInfo = array(
	'username' =>'king' ,
	'age' => 12,
	'email'=>'502244672@qq.com',
	'salary'=>600000
);

print_r($username);

echo '<hr/>';

//定义混合数组
$arr = array(
	'a',
	'b',
	'c',
	'username' =>'haha' ,
	'desc'=>'最好的',
	5 => '三十岁'
);

print_r($arr);


echo '<hr/>';


echo '<pre>';
//测试键名
$arrays = array(
	3 =>a ,
	'username'=>'zhansan',
	5.6 =>"浮点数转为整数",
	5=>'f',//覆盖上一个
	true=>'true=1',
	false=>'false=0',
	null=>'\'\'',
	// ''=>'ssss' //覆盖null
);


//如果下标重复,后面的覆盖前面的
var_dump($arrays);

echo '<hr/>';

//如果新添加元素没有指定下标,他的下标为已有下标最大值加一(已有下标不全为负数)
$arr = array(
	'a',
	'b',
	18 => 'd',
	'c',
	'g' 
);
var_dump($arr);
echo '<hr/>';

//如果已有下标都为负数,那么新添加元素的下标从0开始
$arr = array(
	-11=>'a',
	-12=>'b',
	-3=>'c',
	'g' 
);
var_dump($arr);
echo '<hr/>';

//PHP5.4之后
$arr = ['a','b','c',5];
var_dump($arr);

$arr = [a=>2,2=>'sss','user'=>'xxx',7];

print_r($arr);


//通过array()创建多维数组
$arr = array(
	'a' => array('a','b','c'),
	array(1=>'s','b',5)
 );
print_r($arr);
echo '<hr/>';

//二维索引+索引
echo '<h4>二维索引+索引</h4>';

$arr = array(
	array(1,'zhangsan'
	),
	array(2,'lisi','xxx','222333'
	)
);
print_r($arr);

echo '<hr/>';
//二维索引+关联
echo '<h4>二维索引+关联</h4>';
$arr = array(
	array('id'=>1,
	'username'=>'zhangsan'
	),
	array('id'=>2,
		'username'=>'lisi'
	)
);
print_r($arr);

echo '<hr/>';

//二维关联+索引
echo '<h4>二维关联+索引</h4>';
$arr = array(
	'users' =>array('king','queen','李四'),
	'ages'=>array(13,24,22)
 );
print_r($arr);

echo '<hr/>';

//二维关联+关联
echo '<h4>二维关联+关联</h4>';

$arr = array(
	'user1' =>array(
		'name'=>'king',
		'age'=>22,
		'id'=>'1352222'
		),
	'user2'=>array(
		'name'=>'allen',
		'age'=>23,
		'id'=>'145222'
		)
 );
print_r($arr);


echo '<pre/>';





















