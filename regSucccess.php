<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>RegSuccess</title>
<style type="text/css">
	*{ margin:0; padding:0; }
	body{ background:#adadad; }
	.main{ margin:100px auto;background:#17d227;box-shadow: 0px 0px 12px #fff; height:300px; width:500px;color:#F00; }
	.main span{ display:block; text-align:center;padding:26px 0px;font-size:32px;}
	.main a{ display:inline-block; text-align:center;color:#FFF; font-size:22px;}
	.notice{ color:#fcff6e; font-size:26px;text-align:center;}
	h5{ color:#e8e8e8; }
</style>
</head>
<body>
<div class="main">
	<?php
		header("Content-Type: text/html;charset=utf-8");//设置PHP编码为UTF8
		$regname = $_SESSION["name"];
	?>
	<!-- <%
		request.setCharacterEncoding("utf-8");
		String regname = (String)session.getAttribute("regname");
	%> -->
	<span>^_^!恭喜您，注册成功!!!</span>
	<div class="notice"><h5><?php echo $regname ?></h5>用户名现在可以登录！</div>
	<span>请您<a href="index.php">返回首页</a>登陆</span>
</div>

</body>
</html>