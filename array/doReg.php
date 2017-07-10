<?php 

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$parameterArr = compact('username','password','email');
print_r($parameterArr);


 ?>