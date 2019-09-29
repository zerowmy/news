<?php
	$link = @mysqli_connect("127.0.0.1","root","root","news");
	//echo $link?"数据库news链接Success！<br />":"链接news失败!<br />";
	//or die("连接数据库news失败");
	$name = $_POST["name"];
	//判断如果数据库已存在此用户名 说明已注册 则返回登陆
	if( isset($name) )//接受从主页传过来的参数name，保存到$name变量中;
	{
		//echo "表单提交用户名{$name}<br />";
		$query = "select username from user";
		$result = mysqli_query($link,$query);
		$flag = false;
		while($rows = mysqli_fetch_array( $result ))
		{
			if( $name == $rows['username'] )
			{
				$flag = true;
				break;
			}else{
				$flag = false;
				continue;
			}
		}
		//echo $flag?"{$name}已经注册":"{$name}未注册";
		if( !$flag )//如果提交的name未注册(在user中查询不到)，执行注册代码
		{
			//$name = $_POST['name'];
			$psd = $_POST['password'];
			$sex = $_POST['sex'];
			$email = $_POST['mail'];
			$borndate = $_POST['born'];
			
			$query = "insert into user(username,userpsd,usesex,email,borndate)  values('{$name}','{$psd}','{$sex}','{$email}','{$borndate}')";
			$result = mysqli_query($link,$query);
			//$res?"注册成功":"注册失败";
			//$res? (require'regSucccess.php'):require'regFail.php';
			//session_start();
			if($result)
			{
			    session_start();
				$_SESSION['name']=$name;
				require'regSucccess.php';
			}else{
				//$_SESSION['name']=$name;
				require'regFail.php';
			}
		}else{
				$_SESSION['name']=$name;
				require'regFail.php';
		}
	}
?>