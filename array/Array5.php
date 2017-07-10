<?php 

echo "<pre>";

echo "<hr/>";
echo "<h4>1.数组的使用</h4>";

$arr = ['a','b','c','d'];
print_r($arr);
echo $arr[2];
echo "<br/>";

$a = $arr[3];
echo $a;
echo "<br/>";

$arr = [
'username'=>'rhino',
'age'=>24,
'blog'=>'www.soulmater.cn'
];
echo "用户名为:",$arr['username'],'<br/>';
echo "年龄为:",$arr['age'],'<br/>';
echo "博客地址为:",$arr['blog'],'<br/>';


echo "<hr/>";
echo "<h4>2.二维数组 索引+ 关联</h4>";
$users[] = ['id'=>1,'username'=>'zhangwei','age'=>22];
$users[] = ['id'=>2,'username'=>'yida','age'=>12];
$users[] = ['id'=>3,'username'=>'sunjia','age'=>42];
print_r($users);

echo $users[1]['username'],'<br/>';
echo $users[2]['age'],"<br/>";
echo $users{1}{'age'};


echo "<hr/>";
echo "<h4>3.添加元素</h4>";
$arr1 = ['a','b','c'];
$arr1['test'] = 'this is a test';
$arr1[56] = 56;
print_r($arr1);



echo "<hr/>";
echo "<h4>4.更新数组</h4>";
print_r($arr1);

$arr1[2] = 'D';
print_r($arr1);


echo "<hr/>";
echo "<h4>5.删除指定元素</h4>";
print_r($arr1);
unset($arr1[2]);
unset($arr1['test']);
print_r($arr1);


echo "<hr/>";
echo "<h4>6.二维数组的增删改查</h4>";

$coureses[] = ['id'=>1,'coureseName'=>'php','descriptions'=>'php是世界上最好的语言'];
$coureses[] = ['id'=>2,'coureseName'=>'swift','descriptions'=>'swift快速,强大而灵活'];
$coureses[] = ['id'=>3,'coureseName'=>'kotlin','descriptions'=>'*****最新安卓官方开发语言*****'];

print_r($coureses);
echo $coureses[0]['coureseName'],'----',$coureses[0]['descriptions'],'<br/>';
$coureses[1]['id'] = 4;
print_r($coureses);

echo '<br/>';
unset($coureses[2]['descriptions']);
print_r($coureses);

unset($coureses[1]);
print_r($coureses);

echo "<hr/>";
echo "<h4>7.使用函数</h4>";

function test(){
	return ['a','b','c',34];
}

$array1 = test();
print_r($array1);

echo(test()[2]);




echo "<pre/>";
 ?>