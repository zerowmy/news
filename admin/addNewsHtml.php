<?php 
				@session_start();
				$ad_name="";
				if( isset($_SESSION['ad_name']) ){//非法登录
					$ad_name = $_SESSION['ad_name'];
				}else{
					@header("Refresh:2; url=index.php");//2秒后跳转到主页
					//Header("Location:index.php"); // 跳转到zhu页面
					exit();
					die();//退出
				}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>addNews</title>
<style type="text/css">
	*{ margin:0; padding:0; }
	body{ background:#adadad; }
	form{ margin:18px auto 2px;background:#adbd57;box-shadow: 0px 0px 12px #fff; height:500px; width:920px;font-size:28px;color:#EFF; vertical-align:middle; }
	.ipt_tit{ padding-left:8px; height:32px; width:240px; line-height:32px; }
	.ipt_type{ height:32px; width:80px; line-height:32px;}
	.ipt_author{ padding-left:8px; height:32px; width:150px; line-height:32px; }
	.ipt_content{padding:8px; position:relative;top:-28px;left:26px;font-family: "微软雅黑"; font-size:18px;color:#0F0; display:block;margin:auto;}
	.ipt_sub{ width: 440px; letter-spacing: 46px; font-size: 20px; font-family: "微软雅黑"; background-color: #27a72a; color: #FFF; height: 34px;display: block; margin: 4px auto;}
</style>
</head>
<body>
<form action="addNews.php" method="post">
	新闻标题<input class="ipt_tit" type="text" name="tit" maxlength="20" placeholder="请输入新闻标题"/>
	新闻类型<select class="ipt_type" name="type">
		<option value="title">&ensp;头&emsp;条</option>
		<option value="edu">&ensp;教&emsp;育</option>
		<option value="social">&ensp;社&emsp;会</option>
		<option value="science">&ensp;科&emsp;技</option>
		<option value="military">&ensp;军&emsp;事</option>
		<option value="finance">&ensp;财&emsp;经</option>
		<option value="sport">&ensp;体&emsp;育</option>
		<option value="history">&ensp;历&emsp;史</option>
		<option value="car">&ensp;汽&emsp;车</option>
		<option value="video">&ensp;视&emsp;频</option>
	</select>
	新闻发布者<input class="ipt_author" type="text" name="author" maxlength="20" placeholder="请输入发布新闻作者"/><br />
	新闻内容<textarea class="ipt_content" name="content" cols=80 rows=14 placeholder="请输入新闻发布内容"></textarea>
	<input type="submit" class="ipt_sub" value="发布新闻" />
</form>
</body>
</html>