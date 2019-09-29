<?php
	//开启 Session
	session_start();
	Header("Location:index.php");
	if( isset($_SESSION['name']) )
	{
		unset( $_SESSION['name'] );
	}
	if( isset($_SESSION['ad_name']) )
	{
		unset( $_SESSION['ad_name'] );
	}
	// 删除所有 Session 变量
	$_SESSION = array();
	//判断 cookie 中是否保存 Session ID
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),'',time()-3600, '/');
	}
	//彻底销毁 Session
	session_destroy();
?>