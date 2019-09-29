<style type="text/css">
	td{text-align:center;}
</style>
<?php
	$host = "127.0.0.1";	//主机名
	$user = "root";			//mysql用户名
	$password = "root";		//MySQL用户密码
	$db = "news";			//要连接的数据库名称
	$link = mysqli_connect($host,$user,$password,$db) or die("连接数据库news失败");
	if($link)
	{
		echo ("连接数据库成功！");
	}else{
		echo ("链接数据库失败，原因：".$link);
	}

	/*
	//测试数据库数据mysql
	$query = "select user,host,password from user";
	$result = mysqli_query($link,$query);
	echo "<table border='1' height='300' width='300'><tr>"
	while($rows = mysqli_fetch_array($result)){
		echo "<td>主机名</td><td>{$rows['host']}</td>";
		echo "<td>用户名</td>{$rows['user']}</td>";
		echo "<td>用户密码</td>{$rows['password']}</td></tr>";
	}
	echo "</table>";
	*/
	echo "<table border='1' height='300' width='300'>";
	echo "<tr><td>ID</td><td>姓名</td><td>密码</td></tr>";
	//测试数据库数据news
	$query = "select * from user";
	$result = mysqli_query($link,$query);
	while($rows = mysqli_fetch_array($result)){
		echo "<tr><td>{$rows['userid']}</td>";
		echo "<td>{$rows['username']}</td>";
		echo "<td>{$rows['userpsd']}</td></tr>";
	}
	echo "</table>";
?>