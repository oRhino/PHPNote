<?php 

echo "<pre>";

echo "<hr/>";
echo "<h4>1.快速创建数组 range(参数1,参数2,参数3)是下标连续的,参数1是起始位置,参数2是结束位置,参数3是步长(可省略)</h4>";

$arr= range(1, 10);
print_r($arr);

echo "<hr/>";
echo "<h4>2.手动指定步长的数组,步长的正负并不影响,因为参数1和参数2的大小决定了步长的符号</h4>";

$arr=range(2, -4,2);
print_r($arr);

echo "<hr/>";
echo "<h4>ASCII</h4>";
$arr=range('a','z');
print_r($arr);

echo "<hr/>";
echo "<h4>参数1和参数2会自动转为整形,比如false=0,true=1,'2'=2,若两个都可以转化为ASCII码,则转换为ASCII,比如('2','a')时,=>(2,0),而('>','B')则按照ASCII进行</h4>";

$arr=range('>', 'B');
print_r($arr);

echo "<hr/>";
echo "<h4>range()其实同for循环动态创建索引数组,chr()将ASCII转成对应字符</h4>";
for ($i=97; $i<=122 ; $i++){
	$arr1[] = chr($i);
}
print_r($arr1);



echo "<hr/>";
echo "<h4>compact()快速创建关联数组</h4>";
echo "方式1:array()<br/><br/>";

$username ='allen';
$age=24;
$email='2033444888@qq.com';
$arr = array(
	'username' => $username , 
	'age'=>$age,
	'email'=>$email
);
print_r($arr);

echo "方式2:[]动态创建数组<br/><br/>";

$userInfo['username']=$username;
$userInfo['age']=$age;
$userInfo['email']=$email;
print_r($userInfo);

echo "方式3:compact()创建,通过compact()创建数组的时候,只能写已经存在的变量的名称,不需要加$,名称就是对应的键名,然后会寻找该名称的变量名,如果变量名不存在,是没有对应的键值对的<br/><br/>";

$a=12;
$userInfo1=compact('username','age','email','a','b','c');
print_r($userInfo1);



echo "<hr/>";
echo "<h4></h4>";



echo "<hr/>";
echo "<h4></h4>";




echo "<pre/>";
 ?>