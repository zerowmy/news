<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>LoginFail</title>
<style type="text/css">
	*{ margin:0; padding:0; }
	body{ background:#adadad; }
	.main{ margin:100px auto;background:#57bd60;box-shadow: 0px 0px 12px #fff; height:300px; width:500px;color:#F00; }
	.main span{ display:block; text-align:center;padding:26px 0px;font-size:32px;}
	.main a{ display:inline-block; text-align:center;color:#FFF; font-size:22px;}
	.notice{ color:#FD0; font-size:26px;text-align:center;}
	h5{ color:#e8e8e8; }
</style>
</head>
<body>
<div class="main">
	<?php
		header("Content-Type: text/html;charset=utf-8");//设置PHP编码为UTF8
		$regname = $_SESSION["name"];
		//var_dump($regname);
	?>
	<span>-_-!不好意思，您注册失败了！</span>
	<div class="notice"><h5><?php echo $regname ?></h5>用户名已存在！</div>
	<span>请您<a href="index.php">返回首页</a></span>
</div>

</body>
</html>