<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>admin</title>
    <style type="text/css">
    	*{ margin:opx; padding:0px;}
    	body{text-align:center; background:#FFF;}
    	.nav{ height:40px; min-width:800px; background:#0ed3ec; text-align:right; color: #f40909; font-family: 微软雅黑; font-size: 24px}
    	.nav span{ font-family: cursive; color: #ff0; line-height:40px;margin-right:16px; }
    	.title{ min-width:1200px; letter-spacing:50px;height: 54px;}
    	.title img,h2{vertical-align:middle;}
    	h2{ display:inline-block; color:#F00; }
    	a{ display:inline-block; font-size:20px; line-height:40px;width:120px; height:40px;text-decoration:none;vertical-align:middle;  }
    	.main{ margin:0px 0px; min-width:1200px; margin: 4px auto;}
    	.main-left{display:inline-block; vertical-align:middle; width:120px; height:500px;  border:medium double #e69108; }
    	.main-left a{ display:inline-block; margin:16px 0px; transition: padding-left 0.5s; background:#f48a09; color:#FFF; border-radius:25px 0px 25px 0px;}
    	.main-left a:hover{ background:#f40909; color:#fdf208; padding-left:12px;}
    	.main-right{display:inline-block; vertical-align:middle; border:1px solid #b7b7b7; }
    	.main-right iframe{min-width:1050px; height:500px; frameborder:0; border:0; scrolling:no;}
    	.footer{ height:40px; line-height:40px; min-width:800px; font-size:25px; background:#0bdeef; color:#FFF; text-align:center;}
    </style>
    </head>
    <body>
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
    	<div class="nav">
    		当前管理员:<span><?php echo $ad_name; ?></span>
    	</div>
    	<div class="title">
    		<img src="images/hand.jpg" width="206px" height="40px" alt="新闻">
    		<h2>管理员界面</h2>
    	</div>
    	<div class="main">
    		<div class="main-left">
    			<a href="admin/allNews.php" target="myframe">所有新闻</a><br> <a
    				href="admin/addNewsHtml.php" target="myframe">增加新闻</a><br> <a
    				href="admin/delNews.php" target="myframe">删除新闻</a><br> <a
    				href="admin/allUsers.php" target="myframe">所有用户</a><br> <a
    				href="admin/delUser.php" target="myframe">删除用户</a> <a
    				href="admin/addAdmin.php" target="myframe">增加管理员</a> <a
    				href="userLogout.php" target="_self">退出管理员</a>
    		</div>
    		<div class="main-right">
    			<iframe src="admin/allNews.php" name="myframe"></iframe>
    		</div>
    	</div>
    	<div class="footer">CopyRight:2017-04-24&ensp;版权所有&copy;Zero_wmy</div>
    </body>
</html>