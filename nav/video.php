<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>热点视频</title>
<style type="text/css">
	*{ margin: 0; padding: 0; font-family:"微软雅黑";}
	h2{ background:#d6cccc;font-style: italic;height: 46px;letter-spacing: 24px;text-align: -webkit-center;margin: 2px 10px;min-width:1120px; line-height: 42px; color: #FFF; font-size: 46px; }
	.main{ min-width: 1140px; margin:2px auto; border: 1px solid red;}
	.menu { width:180px; background-color: #9e759e; margin-left:8px; vertical-align:middle; height: 600px;display:inline-block; }
	.main .menu ul li { list-style: none; width:180px; color:#FFF; font-size:18px;line-height:20px;}
	.content{ display:inline-block; width:920px; height:600px; vertical-align:middle; background-color: #ececec;}
</style>
</head>
<body>
<h2>热点视频</h2>
<%
	mysql.driver();
	Connection con = null;	
	Statement sql = null;
	con = DriverManager.getConnection(mysql.DB_URL, mysql.DB_USERNAME, mysql.DB_PASSWORD);
	//与Mysql数据库连接后，得到连接对象con
	sql = con.createStatement();
	//n_title,n_content,n_author,n_date
	ResultSet rs = sql.executeQuery("select * from news_tb where n_type='video'");
%>
<div class="main">
	<div class="menu">
		<ul>
		<%
			while(rs.next())
			{
				/* out.print(rs.getInt(1));//ID
				/* out.print(rs.getString(2));//type
				out.print(rs.getString(3));//title
				out.print(rs.getString(4));//content
				out.print(rs.getString(5));//author 
				out.print(rs.getString(6));//date */
				out.print("<li><div style='cursor:pointer;text-align:center;margin:4px 0px;padding:2px 0px;background:#b7b7b7;color:#F00;'>"+rs.getString(3)+"</div></li>");	//ID
			}
		%>
		</ul>
	</div>
	<div class="content">
	<%
		rs = sql.executeQuery("select * from news_tb where n_type='video'");
		while(rs.next())
		{
			out.print("<div>");
			out.print("<h3 style='text-align:center; color:red;'>"+rs.getString(3)+"</h3>");
			out.print("&emsp;&emsp;"+rs.getString(4)+"<br />");
			out.print("<span style='display:block;text-align:right;padding-right:10px; color:#F00;'>作者:"+rs.getString(6)+"</span>");
			out.print("<span style='display:block;text-align:right;padding-right:10px; color:#F00;'>发布时间:"+rs.getString(5)+"</span></div>");
		}
	%>
	</div>
</div>
<script type="text/javascript">
	var Oli =  document.getElementsByTagName("li");
	var content = document.getElementsByClassName("content");
	//alert(content);
	var Odiv = content[0].getElementsByTagName("div");
	//alert(Oli.length);
	//把所有的内容隐藏
	function hide()
	{
		for(var i=0; i<Odiv.length; i++)
		{
			Odiv[i].style.display = "none"; 
		}
	}
	function show(i)
	{
		hide();
		Odiv[i].style.display = "block"; 
	}
	hide();
	//点击新闻标题显示新闻
	for (var k = 0; k < Oli.length; k++)
	{
		Oli[k].index = k;	//添加用户自定义属性index储存每个li的下标
		Oli[k].onclick = function()
		{
			hide();
			Odiv[this.index].style.display = "block";
		}
	}
</script>
</body>
</html>