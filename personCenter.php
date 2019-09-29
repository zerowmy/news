<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>个人中心</title>
<style type="text/css">
	*{margin:0px; padding:0px;}
	h2{color:#ff0; background:#e7b862; text-align:center;height:40px;line-height:40px;font-size:28px;}
	.info{ margin:15px auto; height:300px; font-size:28px;}
	.info .info_img{ display:inline-block; vertical-align:middle; height:220px; }
	.info .info_tab{ display:inline-block; vertical-align:middle; height:220px; line-height: 70px;background: pink;}
</style>
</head>
<body>
<h2>个人用户中心</h2>
<?php
	$link = @mysqli_connect("127.0.0.1","root","root","news");
	$query = "select username from user";
	$result = @mysqli_query($link,$query);
	$row = mysql_fetch_array($result);
?>
<div class="info">
	<img class="info_img" src="images/people.png" width="230" height="230" alt="self"/>
	<div class="info_tab">
	用户ID:&emsp;<?php echo $row[0]; ?>&emsp;
	用&ensp;户&ensp;名:&emsp;<?php echo $row['username']; ?><br />
	性&emsp;别:&emsp;<?php echo $row['usersex']; ?>&emsp;&ensp;
	出生日期:&emsp;<?php echo $row['borndate']; ?>年<br />
	邮&emsp;箱:&emsp;<?php echo $row['email']; ?>
	</div>
</div>
</body>
</html>