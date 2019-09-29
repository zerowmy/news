<style type="text/css">
	*{margin: 20 auto;}
	td{text-align:center;}
	h3{color: #f48a09;display: block; margin: 6px auto; text-align: center;}
	h3 a{color:red;};
</style>
<?php
	$link = @mysqli_connect("127.0.0.1","root","root","news");
	$newsName = $_POST["tit"];
	$newsType = $_POST["type"];
	$newsAuthor = $_POST["author"];
	$newsContent = $_POST["content"];
	//打印接受到的数据
	echo "<table border='1'>
	<tr>
		<td>新闻名称</td>
		<td>新闻类型</td>
		<td>新闻作者</td>
		<td>新闻内容</td>
	</tr>
	<tr>
		<td>{$newsName}</td>
		<td>{$newsType}</td>
		<td>{$newsAuthor}</td>
		<td>{$newsContent}</td>
	</tr></table>";
	//判断如果数据库已存在此用户名 说明已注册 则返回登陆
	if( $newsName==""||$newsAuthor==""||$newsContent=="" )//接受从主页传过来的参数name，保存到$name变量中;
	{
		echo "<br /><h3>新闻名称、发布作者、内容不能为空！</h3>";
		return ;
		echo "<br /><h3>新闻发布失败！-_-</h3>";;
	}else{
		$query = "insert into news_tb(n_title,n_type,n_author,n_content,n_date)  values('{$newsName}' , '{$newsType}' , '{$newsAuthor}' , '{$newsContent}' , TIME(NOW()) )";
		$result = mysqli_query($link,$query);
		//session_start();
		if($result)
		{
			echo "<br /><h3>新闻发布成功！^_^</h3>";
		}else{
			echo "<br /><h3>新闻发布失败！-_-</h3>";
		}
		echo "<h3><a href=''>返&emsp;&emsp;&emsp;回</h3>";
		//Header("Location:admin/addNewsHtml.php");
	}
?>