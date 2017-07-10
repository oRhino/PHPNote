<?php

$users = [
      ['id'=>12223,'username'=>'queen','age'=>24,'email'=>'2003344@qq.com'],
      ['id'=>23333,'username'=>'allen','age'=>34,'email'=>'2003344@yahoo.com'],
      ['id'=>32222,'username'=>'crush','age'=>54,'email'=>'4985345@qq.com'],
      ['id'=>40001,'username'=>'queen3','age'=>52,'email'=>'2003344@163.com'],
      ['id'=>00001,'username'=>'queen4','age'=>23,'email'=>'2003344@126.com'],
      ['id'=>33331,'username'=>'queen5','age'=>98,'email'=>'2003344@yeah.net']
    ];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>用户列表</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<table border="1" cellpadding="0" cellspacing="0" width="80%" bgcolor="#abcdef">
		<caption>table title and/or explanatory text</caption>
		<thead>
			<tr>
				<th>用户列表</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>编号</td>
				<td>用户名</td>
				<td>年龄</td>
				<td>邮箱</td>
			</tr>
			<?php
			foreach($users as $user){
			?>
			<tr>
			<td> <?php echo $user['id']; ?> </td>
			<td> <?php echo $user['username']; ?> </td>
			<td> <?php echo $user['age']; ?> </td>
			<td> <?php echo $user['email']; ?> </td>
			</tr>
			<?php
			  }
			?>
		</tbody>
	</table>
</body>

</html>


















