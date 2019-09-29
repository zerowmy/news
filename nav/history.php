<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>历史事件</title>
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
<h2>历史事件</h2>

<div class="main">
	<div class="menu">
		<ul>
		
		</ul>
	</div>
	<div class="content">
	
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