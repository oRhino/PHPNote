<?php 

echo "<pre>";
echo "<h4>定义常量数组,const在php5.6之后可以定义常量</h4>";
const ARR1 = array('优秀','良好','及格','不及格');
print_r(ARR1);

const ARR2 = [
'timeInterval'=>3.0,
'content-type'=>'text/html',
'content-length'=>2457,
'accept-lanuage'=>'en'
];
print_r(ARR2);

echo "<hr/>";
echo "<h4>通过define定义常量数组</h4>";

define('TEST1', array('a','b','c'));
print_r(TEST1);

define('TEST2', ['2',true,344]);
print_r(TEST2);

define('CUSTOM_UPLOAD_ERRORS', [
	'ext_error'=>"上传文件扩展名不符合规格",
	'maxsize_error'=>"上传文件大小不符合规格",
	'time_error'=>"上传超时"
	]
);
print_r(CUSTOM_UPLOAD_ERRORS);
echo "<br/>";
echo CUSTOM_UPLOAD_ERRORS['ext_error'];



echo "<pre/>";


 ?>