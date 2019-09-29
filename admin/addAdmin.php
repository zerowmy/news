<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<style type="text/css">
	h1{ text-align:center; color:red; padding:5px; background: #e8e8e8;}
	table{ margin:5px auto; }
	th{ width:180px; height:40px; background:#00cc33; color:#0000ff; border-collapse:collapse;}
	td{ width:180px; height:40px; text-align:center; }
	tr:hover{ background:#ccccff; color:#0000cc ; }
	td:hover{ background:pink; color:#00cc00; size:50px; }
	.ad_input{ maxlength="18"; height:100%; padding-left:8px; outline:none;}
</style>
<h1>增加管理员</h1>
<?php
//显示news数据库的user表数据
//数据库的链接
$link = @mysql_connect('127.0.0.1','root','root');
@mysql_select_db('news');
if($link){
	echo "link database news Success,《==以下是管理员列表！==》";
}else{
	echo "link database news Fail";
	exit;
}

@$page = $_GET['page']?$_GET['page']:1;//获得当前的页面数
$table_size = 3;						//查询偏移量，即是每页显示的标的记录数
$offset = ($page-1)*$table_size;		//
//SQL准备
$sql = "select * from admin";
//发送sql语句
$res = mysql_query($sql) ;
//获得查询的总记录条数保存到$totleSize
$totleSize = mysql_num_rows($res);
//echo $totleSize."条记录<br />";
//获得总页面数保存到变量$pageSiz中
$pageMax = ceil($totleSize / $table_size);
//echo $pageMax."页<br />";
//echo $offset."from".$table_size."jilu";

//解析结果集，把查询到的每一条记录保存到$rows数组中
$sql = "select * from admin  limit {$offset},{$table_size}";
$res = mysql_query($sql) ;
$rows = array();
while( $row = mysql_fetch_assoc($res) ){//mysql_fetch_assoc和mysql_fetch_array
	$rows[] = $row;
}
?>
<table border='1'>
	<thead>	
		<tr>
			<th>管理员ID</th>
			<th>管理员名称</th>
			<th>管理员密码</th>
		</tr>
	</thead>
	<?php foreach($rows as $value):?>
	<tbody>
		<tr>
			<td><?php echo ("{$value['ad_id']}");?></td>
			<td><?php echo ("{$value['ad_name']}");?></td>
			<td><?php echo ("{$value['ad_psd']}");?></td>
		</tr>
	</tbody>
		
	<?php endforeach;?>
	<tr style="text-align:center">
		<td colspan='3'>
			<a href="./addAdmin.php?page=1">首页</a>
			<a href="./addAdmin.php?page=<?php echo $page <= 1 ? $page : $page-1; ?>">上一页</a>
			<a href="./addAdmin.php?page=<?php echo $page >= $pageMax ? $page : $page+1; ?>">下一页</a>
			<a href="./addAdmin.php?page=<?php echo $pageMax; ?>">尾叶<a>
		</td>
	</tr>
</table>
<hr />
<form method="post" action="./crud.php">
<table border="1">
	<tr style="background:cyan;">
		<td>名称：</td>
		<td>密码：</td>
		<td>执行操作</td>
	</tr>
	<tr>
		<td><input type='text' name='ad_name' placeholder="请输入&emsp;管理员名称"  class="ad_input"></td>
		<td><input type='password' name='ad_psd' placeholder="请输入&emsp;管理员密码"  class="ad_input"></td>
		<td><input type='submit' value='增加管理员' class="ad_input"></td>
	</tr>
</table>
</form>
</body>
</html>
