<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>delUser</title>
</head>
<body>
	<h1 style="text-align:center; color:red; padding:5px; background: #e8e8e8;">删除普通用户</h1>
	<style type="text/css">
	h1{ text-align:center; color:red; padding:5px; background: #e8e8e8;}
	table{ margin:5px auto; }
	th{ width:180px; height:40px; background:#f9c; color:#0000ff; border-collapse:collapse;}
	td{ width:180px; height:40px; text-align:center; }
	tr:hover{ background:#ccccff; color:#0000cc ; }
	td:hover{ background:pink; color:#0ff; size:50px; }
	.del{color:red;}
</style>
<?php
//显示news数据库的user表数据
//数据库的链接
$link = @mysql_connect('127.0.0.1','root','root');
@mysql_select_db('news');
if($link){
	echo "link database news Success";
}else{
	echo "link database news Fail";
	exit;
}

@$page = $_GET['page']?$_GET['page']:1;//获得当前的页面数
$table_size = 5;						//查询偏移量，即是每页显示的标的记录数
$offset = ($page-1)*$table_size;		//
//SQL准备
$sql = "select * from user";
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
$sql = "select * from user  limit {$offset},{$table_size}";
$res = mysql_query($sql) ;
$rows = array();
while( $row = mysql_fetch_assoc($res) ){//mysql_fetch_assoc和mysql_fetch_array
	$rows[] = $row;
}
?>
<table border='1'>
	<thead>	
		<tr>
			<th>ID</th>
			<th>姓名</th>
			<th>密码</th>
			<th>性别</th>
			<th>出生年份</th>
			<th>电子邮件</th>
			<th>执行操作</th>
		</tr>
	</thead>
	<?php foreach($rows as $value):?>
	<tbody>
		<tr>
			<td><?php echo ("{$value['userid']}");?></td>
			<td><?php echo ("{$value['username']}");?></td>
			<td><?php echo ("{$value['userpsd']}");?></td>
			<td><?php echo (( 0==$value['usesex'] )?'女':'男');?></td>
			<td><?php echo ("{$value['borndate']}");?></td>
			<td><?php echo ("{$value['email']}");?></td>
			<td><?php echo ("<a class='del' href='#'>删除用户</a>");?></td>
		</tr>
	</tbody>
	<?php endforeach;?>
	<tr style="text-align:center">
		<td colspan='7'>
			<a href="./delUser.php?page=1">首页</a>
			<a href="./delUser.php?page=<?php echo $page <= 1 ? $page : $page-1; ?>">上一页</a>
			<a href="./delUser.php?page=<?php echo $page >= $pageMax ? $page : $page+1; ?>">下一页</a>
			<a href="./delUser.php?page=<?php echo $pageMax; ?>">尾叶<a>
		</td>
	</tr>
</table>
</body>
</html>