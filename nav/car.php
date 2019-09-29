<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>汽车要闻</title>
<style type="text/css">
	*{ margin: 0; padding: 0; font-family:"微软雅黑";}
	h2{ background:#d6cccc;font-style: italic;height: 46px;letter-spacing: 24px;text-align: -webkit-center;margin: 2px 10px;min-width:1120px; line-height: 42px; color: #FFF; font-size: 46px; }
	.main{ min-width: 1140px; margin:2px auto; border: 1px solid red;}
	.menu { width:180px; background-color: #9e759e; margin-left:8px; vertical-align:middle; height: 600px;display:inline-block; }
	.main .menu ul li { list-style: none; width:180px; color:#FFF; font-size:18px;line-height:20px;}
	.content{ display:inline-block; width:920px; height:600px; vertical-align:middle; background-color: #ececec;}
</style>
</head>
<body>
<h2>汽车要闻</h2>
<?php
	$host = "127.0.0.1";	//主机名
	$user = "root";			//mysql用户名
	$password = "root";		//MySQL用户密码
	$db = "news";			//要连接的数据库名称
	$link = mysqli_connect($host,$user,$password,$db) or die("连接数据库news失败");
	//echo var_dump($link);
	if($link)
	{
		echo ("连接数据库成功！");
	}else{
		echo ("链接数据库失败，原因：".$link);
	}
?>
<div class="main">
	<div class="menu">
		<ul>
		<?php 
			if($link)
			{
				//测试数据库数据mysql
				$query = "select user,host,password from user";
				//echo "<table border='1' height='300' width='300'><tr>"
				while( $rows = @mysqli_fetch_array( mysqli_query($link,$query) ) )
				{
					echo "<td>主机名</td><td>{$rows['host']}</td>";
					echo "<td>用户名</td>{$rows['user']}</td>";
					echo "<td>用户密码</td>{$rows['password']}</td></tr>";
				}
			}		
		?>
		</ul>
	</div>
	<div class="content">
	</div>
</div>
<script type="text/javascript">
	var Oli =  document.getElementsByTagName("li");
	var content = document.getElementsByClassName("content");
	//alert(content);
	var Odiv = content[0].getElementsByTagName("div");
	//alert(Oli.length);
	//把所有的内容隐藏
	function hide()
	{
		for(var i=0; i<Odiv.length; i++)
		{
			Odiv[i].style.display = "none"; 
		}
	}
	function show(i)
	{
		hide();
		Odiv[i].style.display = "block"; 
	}
	hide();
	//点击新闻标题显示新闻
	for (var k = 0; k < Oli.length; k++)
	{
		Oli[k].index = k;	//添加用户自定义属性index储存每个li的下标
		Oli[k].onclick = function()
		{
			hide();
			Odiv[this.index].style.display = "block";
		}
	}
</script>
</body>
</html>