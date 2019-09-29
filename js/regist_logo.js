	var name;
	var psd;
	var re_psd;
	var mail;
	var notice_name;
	var notice_psd;
	var notice_re_psd;
	var notice_mail;
	var code;
	var loginname;
	var loginpsd;
	var notice_loginname;
	var notice_loginpsd;
	var exit;
	/* start 用户名检测 */
	function check_name()
	{
		name = document.getElementById("name").value.trim();   		
		notice_name = document.getElementById("notice_name");
		var bol = false;
		if( name == "" )
		{
			notice_name.innerHTML = "<span style='color:red; font-size:18px:16px'>&emsp;用户名输入不能为空<span>";        		
			bol = false;
		}else if(!IsRight(name))
		{
			notice_name.innerHTML = "<span style='color:red; font-size:18px:16px'>&emsp;用户名输入不合法<span>";        		        		
			bol = false;
		}else
		{
			notice_name.innerHTML = "<span style='color:blue; font-size:18px:16px'>&emsp;用户名输入合法<span>";        		        		        		
			bol = true;
		}
		return bol;
	}
	/* start 用户名检测 */

	/* start 密码强度检验 */
	function checkpsd(value)
	{
		//alert(value);
		var level = -1;
		var bgcolor = ["green","#B65E5E","orange","#ED2020"];
		for( var i=0; i <bgcolor.length; ++i)
		{
			document.getElementById("info"+i).style.backgroundColor = "#d0d0d0";
		}
		//纯数字
		if(/\d/.test(value))
		{
			++level;
		}
		//小写字母
		if(/[a-z]/.test(value))
		{
			++level;
		}
		//大写字母
		if(/[A-Z]/.test(value))
		{
			++level;
		}
		//其他字符
		if(/\W/.test(value))
		{
			++level;
		}
		for( var i=0; i<=level; ++i)
		{
			document.getElementById("info"+i).style.backgroundColor = bgcolor[i];
		}
	}
	/* end 密码强度检验 */
	/* IsRight函数判断字符是中文或英文 */
	function IsRight(str)
	{
		var regCh = /[\u4e00-\u9fa5]+/gi;
		var regEn = /\w/gi;
		if( str.match(regCh) || str.match(regEn) )	//str要么是全中文要么是全英文
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	/* start 输入Email格式判断 */ 	//163.com   189.cn  yeah.net   126.net  qq.com foxmail.com gamil.com  yahoo.cn
	function IsEmail(string){
		var email = /^[\w]{3,11}@[\w]{2,7}\.[com|cn|net]{2,3}$/g;
		if(string.trim().match(email) == null){
			return false;
		}else{
			return true;
		}
	}
	/* end 输入Email格式判断 */
	
		var username;
		var reg;
		var logo;
		var exit;
		var shoucang;
	/*start 导航栏的当前用户名的显示隐藏  */
		username = document.getElementById("username");
		reg = document.getElementById("reg");
		logo = document.getElementById("logo");
		exit = document.getElementById("exit");
		shoucang = document.getElementById("shoucang");
		//alert(shoucang.style.display);
		if(username.innerText=="您好,null" || username.innerText=="您好,")
		{
			username.style.display = "none";//用户未登录隐藏
			exit.style.display = "none";
			shoucang.style.display = "none";
		}else{
			username.style.display = "inline-block";	//用户已经登录显示
			exit.style.display = "inline-block";
			shoucang.style.display = "block";
			reg.style.display = "none";
			logo.style.display = "none";
		}

	/*end 导航栏的当前用户名的显示隐藏  */
		
	/*start 导航栏的用户 '注册'弹窗*/
		$(function(){
			var _left = ($(window).width()-650)/2;
			var _top = ($(window).height()-450)/2;
			var wth = "650";
			var hig = "450";
			
			$("#reg").click(function(){
				//弹窗居中显示
				$(".showreg").show().css({top:_top,left:_left});
				//显示阴影层
				$(".yy").css("opacity","0.3").show();
			});
			
			//点击空白区消失
			$(".yy").click(function(){
				$(".yy").hide();
				//返回注册弹窗原点
				$(".showreg").show().animate({
					width:"-" + wth + "px",
					height:"-" + hig + "px",
					left:"-"+_left+"px",
					top:"-"+_top+"px"
				},500,function(){
					$(this).css({width:wth,height:hig}).hide();
				});
			});
			//关闭按钮
			$("#reg_clo").click(function(){
				$(".yy").hide();
				//返回注册弹窗原点
				$(".showreg").show().animate({
					width:"-" + wth + "px",
					height:"-" + hig + "px",
					left:"-"+_left+"px",
					top:"-"+_top+"px"
				},500,function(){
					$(".showreg").css({width:wth,height:hig}).hide();
				});
			});
		});
	/*end 导航栏的用户 '注册'弹窗*/
		
	/*start 导航栏的用户 '登陆'弹窗*/
		$(function(){
			var _left = ($(window).width()-600)/2;
			var _top = ($(window).height()-320)/2;
			var wth = "600";
			var hig = "320";
			$("#logo").click(function(){
				//弹窗居中显示
				$(".showlogo").show().css({top:_top,left:_left});
				//显示阴影层
				$(".yy").css("opacity","0.3").show();
				showlogo.backgroundImage = "url('images/hand.jpg')";
			});
			
			//点击空白区消失
			$(".yy").click(function(){
				$(".yy").hide();
				//返回登陆弹窗原点
				$(".showlogo").show().animate({
					width:"-"+wth+"px",
					height:"-"+hig+"px",
					left:_left+"px",
					top:_top+"px"
				},500,function(){
					$(this).css({width:wth,height:hig}).hide();
				});
			});
			//关闭按钮
			$("#log_clo").click(function(){
				$(".yy").hide();
				//返回登陆弹窗原点
				$(".showlogo").show().animate({
					width:"-"+wth+"px",
					height:"-"+hig+"px",
					left:_left+"px",
					top:_top+"px"
				},500,function(){
					$(".showlogo").css({width:wth,height:hig}).hide();
				});
			});
		});
	/*end 导航栏的用户 '登陆'弹窗*/
		
	/*start 主页面图片切换 */
		var left = document.getElementById("left");
		var right = document.getElementById("right");

		var turn_img = document.getElementById("turn_img");
		var img = turn_img.getElementsByTagName("img");
		var pic_point = document.getElementById("points");
		var pic_span = pic_point.getElementsByTagName("span");
		//alert(img.length);
		var pic = document.getElementsByClassName("pic");
		var span = pic[0].getElementsByTagName("span");
		//alert(span.length);
		var index = 0;
		//点击右切换
		right.onclick = function()
		{
			index++;
			index %= img.length;
			for(var i=0; i<img.length; ++i)
			{
				img[i].style.display = "none";
				span[i].className = "";
			}
			img[index].style.display = "block";
			span[index].className = "light";
		}
		//点击左切换
		left.onclick = function()
		{
			index--;
			if(index < 0){
                index = img.length - 1;    //赋值为最后一个图片的下标
            }
			for(var j=0;j<img.length; ++j)
			{
				img[j].style.display = "none";
				span[j].className = "";
			}
			img[index].style.display = "block";
			span[index].className = "light";
		}
		//点击小圆点切换图片
		for (var k = 0; k < span.length; k++)
		{
			span[k].index = k;	//添加用户自定义属性index储存每个span的下标
			span[k].onclick = function()
			{
				for (var h = 0; h < span.length; h++)
				{
					img[h].style.display = "none";
					span[h].className = "";
				}
				img[this.index].style.display = "block";
				this.style.className = "light";
				index = this.index;		//把index重置为当前点击小圆的下标
			}
		}
		//定时播放
		var timer = null;
        function show()
        {
        	timer = setInterval(function(){
        		index++;
        		index %= img.length;
        		for (var i = 0; i < img.length; i++)
        		{
        			img[i].style.display = "none";
        			pic_span[i].className = "";
				}
        		pic_span[index].className = "light";
        		img[index].style.display = "block";
        	},3000);
        }
        show();
        
        //移入事件，鼠标移入时触发暂停图片切换
        var oDiv = document.getElementsByClassName("main_mid");
        //alert(oDiv[0].innerHTML);
        oDiv[0].onmouseover = function()
        {    
            clearInterval(timer);
        }
        //移入事件，鼠标移出时触发开始图片切换
        oDiv[0].onmouseout = function()
        {
            show();
        }
		/*end 主页面图片切换 */
		
        /* end 登陆用户名处理函数 */
    	function check_loginName()
    	{
    		loginname = document.getElementById("loginname").value.trim();    		
    		notice_loginname = document.getElementById("notice_loginname");
    		var bol = false;
    		if( loginname == "" )
    		{
    			notice_loginname.innerHTML = "<span style='color:red; font-size:18px:16px'>&emsp;用户名输入不能为空<span>";        		
    			bol = false;
    		}else if(!IsRight(loginname))
    		{
    			notice_loginname.innerHTML = "<span style='color:red; font-size:18px:16px'>&emsp;用户名输入不合法<span>";        		        		
    			bol = false;
    		}else
    		{
    			notice_loginname.innerHTML = "<span style='color:blue; font-size:18px:16px'>&emsp;用户名输入合法<span>";        		        		        		
    			bol = true;
    		}
    		return bol;
    	}
    	/* end 登陆用户名处理函数 */
    	
    	 /* star 登陆密码处理函数 */
        function check_loginPsd(){
        	loginpsd = document.getElementById("loginpsd").value.trim();
        	notice_loginpsd = document.getElementById("notice_loginpsd");
        	var bol = false;
        	if(loginpsd == "")
        	{
        		notice_loginpsd.innerHTML = "<span style='color:red; font-size:18px:16px'>&emsp;密码输入不能为空<span>";        		
        		bol = false;
        	}else if(loginpsd.length < 5)
        	{
        		notice_loginpsd.innerHTML = "<span style='color:red; font-size:18px:16px'>&emsp;密码输入少于5位<span>";        		        		
        		bol = false;
        	}
        	else
        	{
        		notice_loginpsd.innerHTML = "<span style='color:blue; font-size:18px:16px'>&emsp;密码输入合法<span>";        		        		        		
        		bol = true;
        	}
        	return bol;
        }
        /* end 登陆密码处理函数 */
        
        /* star 登陆验证处理函数 */
		function login()
		{
			if( check_loginName() && check_loginPsd() )	//用户名或者密码为空
        	{
        		return true;
        	}
        	else
        	{        		
        		alert("输入不合法");
        		return false; 
        	}
		}
		/* end 登陆验证处理函数 */

        
		/*start 注册密码输入判断 */
		function check_psd(){
			psd = document.getElementById("psd").value;
			notice_psd = document.getElementById("notice_psd");
			var bol = false;
			if(psd == ""){					//密码为空
				notice_psd.innerHTML = "<span style='color:red; font-size:18px'>&emsp;输入密码为空！<span>";
				bol = false;
			}else {							//密码非空
				if( psd.length < 5 ){		//密码非空情况下再判断格式是否合法
					notice_psd.innerHTML = "<span style='color:red; font-size:18px:16px'>&emsp;密码输入少于5位<span>";
					bol = false;
				}else{
					notice_psd.innerHTML = "<span style='color:#147BF0; font-size:18px'>&emsp;密码格式正确！！<span>";
					bol = true;
				}
			}
			return bol;
		}
		/* end 注册密码输入判断 */
		
		/* start 注册密码再次输入判断 */
		function check_re_psd(){
			re_psd = document.getElementById("re_psd").value;
			notice_re_psd = document.getElementById("notice_re_psd");
			var bol = false;
			if(re_psd == ""){			//密码为空
				bol = false;
				notice_re_psd.innerHTML = "<span style='color:red; font-size:18px'>&emsp;没有确认密码！<span>";
			}else {								//密码非空
				if( re_psd.length < 5 ){		//密码非空情况下再判断格式是否合法
					bol = false;
					notice_re_psd.innerHTML = "<span style='color:red; font-size:18px'>&emsp;密码输入少于5位<span>";
				}else{
					if(re_psd == psd){
						notice_re_psd.innerHTML = "<span style='color:#147BF0; font-size:18px'>&emsp;两次密码一致正确<span>";
						bol = true;
					}else{
						notice_re_psd.innerHTML = "<span style='color:red; font-size:18px'>&emsp;两次密码不一致！<span>";
						bol = false;
					}
				}
			}
			return bol;
		}
		/* end 注册密码再次输入判断*/
		
		/*start 注册检查邮箱格式 */
		function check_mail(){
			mail = document.getElementById("mail").value;
			notice_mail = document.getElementById("notice_mail");
			var bol = false;
			if( mail == ""){				//
				notice_mail.innerHTML = "<span style='color:red; font-size:18px'>&emsp;输入邮箱地址为空！<span>";
				bol = false;
			}else {								//非空
				if(!IsEmail(mail)){		//非空情况下再判断格式是否合法
					notice_mail.innerHTML = "<span style='color:red; font-size:18px'>&emsp;邮箱格式不正确！<span>";
					bol = false;
				}else{
					notice_mail.innerHTML = "<span style='color:#147BF0; font-size:18px'>&emsp;邮箱地址格式正确！<span>";
					bol = true;
				}
			}
			return bol;
		}
		/*end 注册检查邮箱格式*/
		
		/*start 注册生成验证码 */
		function create_code(){
			code="";
			var codearr = new Array('骄','明','良','水','宇','善','诚','印','心','书',
									'将','气','国','年','正','林','光','弦','全','景',
									'义','青','舍','空','翼','天','地','黄','置','实');
			var codelen = 4;
			
			for(var i=0; i<codelen; ++i)
			{
				var index = Math.floor( Math.random()*codearr.length );
				code += codearr[index];
			}
			codebtn.value = code;
		}
		/*end 注册生成验证码 */
		
		/* start  注册检查验证码*/
		function check_code(){
			var ipt = document.getElementById("code");
			var notice_code = document.getElementById("notice_code");
			var bol = false;
			if(ipt.value.trim() =="")
			{
				notice_code.innerHTML = "<span style='color:red; font-size:18px'>&emsp;验证码输入不能为空!<span>";
				bol = false;
			}else if(ipt.value.trim() != code)
			{
				notice_code.innerHTML = "<span style='color:red; font-size:18px'>&emsp;验证码输入不正确!<span>";
				bol = false;
				create_code();
				ipt.value = "";
			}else
			{
				notice_code.innerHTML = "<span style='color:#147BF0; font-size:18px'>&emsp;验证码输入正确!<span>";
				bol = true;
			}
			return bol;			
		}
		/* end  注册检查验证码*/
		
		/*start 主页面注册验证 */
		function zhuce(){
			//alert(check_name()+","+ check_psd() +","+ check_re_psd() +","+ check_mail() +","+ check_code())
			if( check_name() && check_psd() && check_re_psd() && check_mail() && check_code()){
				return true;
			}else{
				alert("检验输入不完整,或者格式不正确-_-");
				return false;
			}
		}
		/*end 主页面注册验证 */
		
		/* start 用户退出 */
		exit = document.getElementById("exit ");
		exit.onclick = function tuichu()
		{
			alert("您真的要离开我吗？");
			username.style.display = "none";//用户未登录隐藏
			exit.style.display = "none";
			shoucang.style.display = "none";
		}
		/* start 用户退出 */
		
		/* start 收藏栏 */
		var shouNum = document.getElementsByClassName("shouNum");
		var shouTit = shouNum[0].getElementsByTagName("div");
		//var shouShow[];
		for (var i = 0; i < shouTit.length; i++)
		{
			/*shouShow[i] = shouTit[i].innerHTML;
			shouTit[i].onclick = function()
			{
				alert(shouShow[i]);
			}*/
		}
		/* end 收藏栏 */