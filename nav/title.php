<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>今日头条要闻</title>
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
<h2>今日头条要闻</h2>
<div class="main">
	<div class="menu">
		<ul>
		</ul>
	</div>
	<div class="content">
	</div>
</div>
<script type="text/javascript">
	var titLi =  document.getElementsByTagName("li");
	var content = document.getElementsByClassName("content");
	//alert(content);
	var titDiv = content[0].getElementsByTagName("div");
	//alert(titLi.length);
	//把所有的内容隐藏
	function hide()
	{
		for(var i=0; i<titDiv.length; i++)
		{
			titDiv[i].style.display = "none"; 
		}
	}
	function show(i)
	{
		hide();
		titDiv[i].style.display = "block"; 
	}
	hide();
	//点击新闻标题显示新闻
	for (var k = 0; k < titLi.length; k++)
	{
		titLi[k].index = k;	//添加用户自定义属性index储存每个li的下标
		titLi[k].onclick = function()
		{
			hide();
			titDiv[this.index].style.display = "block";
		}
	}
</script>
</body>
</html>