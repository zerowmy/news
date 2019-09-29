<?php
	$link = @mysqli_connect("127.0.0.1","root","root","news");

/*	 start----管理员增加模块	*/
		$ad_name = $_POST['ad_name'];
		$ad_psd = $_POST['ad_psd'];
		if($ad_name==""  ||  $ad_psd==""){echo "<script>alert('输入的名称或者密码为空！');</script>";
			$ad_name = "admin";
			$ad_psd = "admin";
			//@header("Refresh:2; url=admin/addAdmin.php");//2秒后跳转到主页
			//Header("Location:admin/addAdmin.php"); // 跳转到zhu页面
		}
		//echo "接受到的管理员名称：".$ad_name."<br />";
		//echo "接受到的管理员密码：".$ad_psd;
		//判断如果数据库已存在此用户名 说明已注册 则返回登陆
		if( isset($ad_name) )//接受从主页传过来的参数name，保存到$ad_name变量中;
		{
			//echo "表单提交用户名{$ad_name}<br />";
			$query = "select ad_name from admin";
			$result = mysqli_query($link,$query);
			$flag = false;
			while($rows = mysqli_fetch_array( $result ))
			{
				if( $ad_name == $rows['ad_name'] )
				{
					$flag = true;
					echo "<script>alert('输入的__管理员名称__已经存在！');</script>";
					break;
				}else{
					$flag = false;
					continue;
				}
			}
			//echo $flag?"{$ad_name}已经注册":"{$ad_name}未注册";
			if( !$flag )//如果提交的name未注册(在admin中查询不到)，执行注册代码
			{	
				$query = "insert into admin(ad_name,ad_psd)  values('{$ad_name}','{$ad_psd}')";
				$result = mysqli_query($link,$query);
				if($result)
				{
					echo "<script>alert('管理员名称:'.{$ad_name}.'添加成功！');</script>";
				}
			}else{
				echo "<script>alert('管理员名称:'.{$ad_name}.'添加 失败！');</script>";
			}
		}
/*	 start----管理员增加模块	*/
?>