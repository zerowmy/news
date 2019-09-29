<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>欢迎来到新闻发布</title>
  <link rel="stylesheet" type="text/css" href="css/base.css" />
 </head>
 <body>
 <?php  @session_start()?:session_start();
        @$name = $_SESSION['name']?$_SESSION['name']:"";
 ?>
	<!-- <h1>新闻发布系统主页</h1> -->
   <div class="nav">
		<div class="nav_top">
			<a href="personCenter.php" target="_blank" id="username">您好,<?php echo $name; ?></a>
			<form method="post" action="userLogout.php">
				<input id="exit" type="submit" value="退出"></input>
			</form>
			<a id="reg">注册</a>
			<a id="logo">登陆</a>
		</div>
		<div class="nav_title">
			<img src="./images/hand.jpg" width="450px" height="80px" alt="news" title="新闻发布系统"/>
			<form action="search" method="post">
				<input type="text" id="search" name="search" maxlength="12" placeholder="输入搜索关键字"/>
				<input type="image" id="btn" src="images/search.png"/>
				<select name="compare" class="cmp">
					<option value="n_title">标题</option>
					<option value="n_content">内容</option>
					<option value="n_date">时间</option>
					<option value="n_author">作者</option>
				</select>
			</form>
			<span>关注天下事，就是关注自己!<?php //var_dump($_SESSION['name']); ?></span>
		</div>
		<div class="nav_link">
			<marquee scrolldelay="100" direction="left" onmouseover="this.stop()" onmouseout="this.start()">
				<a href="#">观天今夜星象，知天下大事---诸葛亮</a>&emsp;&emsp;&emsp;&emsp;
				<a href="#">外太空真的存在生命吗？</a>&emsp;&emsp;&emsp;&emsp;
				<a href="#">未来的能源会枯竭吗？</a>
			</marquee>
		</div>
	</div>
	<div class="main">
		<div class="main_menu">
			<ol>
				<li><a href="./nav/title.php" target="_blank">头条</a></li>
				<li><a href="./nav/edu.php" target="_blank">教育</a></li>
				<li><a href="./nav/social.php" target="_blank">社会</a></li>
				<li><a href="./nav/science.php" target="_blank">科技</a></li>
				<li><a href="./nav/military.php" target="_blank">军事</a></li>
				<li><a href="./nav/finance.php" target="_blank">财经</a></li>
				<li><a href="./nav/sport.php" target="_blank">体育</a></li>
				<li><a href="./nav/history.php" target="_blank">历史</a></li>
				<li><a href="./nav/car.php" target="_blank">汽车</a></li>
				<li><a href="./nav/video.php" target="_blank">视频</a></li>
			</ol>
		</div>
		<div class="main_mid">
			
			<div id="turn_img">
				<img style="display:block" src="./images/main1.jpg" width="1150px" height="440px" alt="news" title="新闻"/>
				<img src="./images/main2.jpg" width="1150px" height="440px" alt="news" title="新闻"/>
				<img src="./images/main3.jpg" width="1150px" height="440px" alt="news" title="新闻"/>
				<img src="./images/main4.jpg" width="1150px" height="440px" alt="news" title="新闻"/>
				<img src="./images/main5.jpg" width="1150px" height="440px" alt="news" title="新闻"/>
				<img src="./images/main6.jpg" width="1150px" height="440px" alt="news" title="新闻"/>
				<img src="./images/main7.jpg" width="1150px" height="440px" alt="news" title="新闻"/>
				<img src="./images/main8.jpg" width="1150px" height="440px" alt="news" title="新闻"/>
				<img src="./images/main9.jpg" width="1150px" height="440px" alt="news" title="新闻"/>
				<img src="./images/main10.jpg" width="1150px" height="440px" alt="news" title="新闻"/>
				<img src="./images/main11.jpg" width="1150px" height="440px" alt="news" title="新闻"/>
				<img src="./images/main12.jpg" width="1150px" height="440px" alt="news" title="新闻"/>
			</div>
			<div class="pic" id="points">
				<span class="light">1</span>
				<span>2</span>
				<span>3</span>
				<span>4</span>
				<span>5</span>
				<span>6</span>
				<span>7</span>
				<span>8</span>
				<span>9</span>
				<span>10</span>
				<span>11</span>
				<span>12</span>
			</div>
			<div class="turn">
				<div id="left">&lt;</div>
				<div id="right">&gt;</div>
			</div>
			
			
		</div>
		
		<div id="shoucang">收藏栏
			<div class="shouNum">
				<div>头条5条</div>
				<div>教育2条</div>
				<div>社会3条</div>
				<div>科技8条</div>
				<div>军事4条</div>
				<div>财经4条</div>
				<div>体育5条</div>
				<div>历史2条</div>
				<div>汽车3条</div>
				<div>视频8条</div>
			</div>
		</div>
		
	</div>
	
	
	<div class="showreg">
		<div id="rege_close"><span id="reg_clo">&times;</span></div>
		<form action="userReg.php" method="post" name="myform" onSubmit="return zhuce()" >
			<p>
				用户名&emsp;&nbsp;<input type="text" name="name" id="name" onblur="check_name()" maxlength="20" placeholder="请输入&emsp;用&emsp;户&emsp;名"></input>
				<span id="notice_name"></span>
			</p>
			<p>
				密&emsp;码&emsp;&nbsp;<input type="password" name="password" id="psd" onblur="check_psd()" onkeyup="checkpsd(this.value)" maxlength="16" placeholder="请输入&emsp;密&emsp;码"></input>
				<span id="notice_psd"></span><br />
				<span class="psdstrong">
						<span id="info0">弱</span><span id="info1">一般</span><span id="info2">强</span><span id="info3">极强</span>
				</span>
			</p>
			<p>
				确认密码&nbsp;<input type="password" name="re_psd" id="re_psd" onblur="check_re_psd()" maxlength="16" placeholder="确认&emsp;密&emsp;码"></input>
				<span id="notice_re_psd"></span>
			</p>
			
				<br /><span id="sexborn">&emsp;&emsp;
				男<input type="radio" name="sex" value="1"/>&emsp;
				女<input type="radio" name="sex" value="0" checked/>
				&emsp;&emsp;&emsp;出生年月:<select name="born" id="born">
				<option value="1999">1999</option>
				<option value="1998">1998</option>
				<option value="1997">1997</option>
				<option value="1996">1996</option>
				<option value="1995">1995</option>
				<option value="1994">1994</option>
				<option value="1993">1993</option>
				<option value="1992" selected="selected">1992</option>
				<option value="1991">1991</option>
				<option value="1990">1990</option>
				<option value="1989">1989</option>
				<option value="1988">1988</option>
				<option value="1987">1987</option>
				<option value="1986">1986</option>
				<option value="1985">1985</option>
				<option value="1984">1984</option>
				<option value="1983">1983</option>
				<option value="1982">1982</option>
				<option value="1981">1981</option>
				<option value="1980">1980</option>
				<option value="1979">1979</option>
				<option value="1978">1978</option>
				<option value="1977">1977</option>
				<option value="1976">1976</option>
				<option value="1975">1975</option>
				<option value="1974">1974</option>
				<option value="1973">1973</option>
				<option value="1972">1972</option>
				<option value="1971">1971</option>
				<option value="1970">1970</option>
				</select></span>
			<p>
				电子邮箱&nbsp;<input type="text" name="mail" id="mail" onblur="check_mail()" placeholder="输入&emsp;电子邮箱"></input>
				<span id="notice_mail">&emsp;</span>
			</p>
			<p>
				验&nbsp;证&nbsp;码&ensp;&nbsp;<input type="text" id="code" onblur="check_code()" maxlength="4" placeholder="输入验证码"></input>
				<input type="button" id="codebtn" onclick="create_code()" value="生成验证码"></input><span id="notice_code"></span><br />
			</p>
			<p>
				<input type="reset" name="reset" value="重&emsp;&emsp;置" class="btn"></input>
				<input type="submit" name="submit" value="注&emsp;&emsp;册" class="btn"></input>
			</p>
		</form>
	</div>
	
	
	
	<div class="showlogo">
		<div id="logo_close"><span id="log_clo">&times;</span></div>
		<form action="userLogin.php" name="myform" method="post" onSubmit="return login()" >
			<p>
				用户名&ensp;:&nbsp;<input type="text" name="loginname" id="loginname" onblur="check_loginName()" maxlength="20" placeholder="请输入&emsp;用&emsp;户&emsp;名"></input>
				<span id="notice_loginname"></span>
			</p>
			<p>
				密&emsp;码&nbsp;:&nbsp;&nbsp;<input type="password" name="loginpsd" id="loginpsd" onblur="check_loginPsd()" maxlength="16" placeholder="请输入&emsp;密&emsp;码"></input>
				<span id="notice_loginpsd"></span><br />
			</p>
			<p>
				<a href="findPassword.php" target="myframe"><input type="button" name="reset" value="找回密码" class="btn"></input></a>
				<input type="submit" name="submit" value="登&emsp;&emsp;陆" class="btn"></input>
				<span id="notice_psd"></span><br />
			</p>
		</form>
	</div>

	<script type="text/javascript" src="js/jquery-1.11.0.min.js" charset="UTF-8"></script>
	<script type="text/javascript" src="js/regist_logo.js" charset="UTF-8"></script>
 </body>
</html>