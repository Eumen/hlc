<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<meta name=”renderer” content=”webkit”>
<meta http-equiv=”X-UA-Compatible” content=”IE=Edge,chrome=1″ >
<head>
<meta charset="utf-8">
<title>登录页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="__PUBLIC__/Css/login/css/login.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="__PUBLIC__/resource/assets/css/style.css">
<link rel="stylesheet" href="__PUBLIC__/resource/assets/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="__PUBLIC__/Css/login/js/jquery.js"></script>
<script src="__PUBLIC__/resource/assets/js/jquery.backstretch.min.js"></script>
<style>
div#bg {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: -10;
  background-position: center 0;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
  zoom: 1;
 
  opacity:1;
  transition: opacity 1s linear;
  -moz-transition: opacity 1s linear;
  -webkit-transition: opacity 1s linear;
  -o-transition: opacity 1s linear;
}
</style>

</head>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/jquery-1.7.2.min.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/Base.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/prototype.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/mootools.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/Ajax/ThinkAjax.js\"></sc"+"ript>")</script>
<script type="text/javascript">document.write("<scr"+"ipt src=\"__PUBLIC__/Js/Form/CheckForm.js\"></sc"+"ript>")</script>

<script src="__PUBLIC__/Js/jquery.min.js"></script>
<script type="text/javascript"> 
jQuery.noConflict();
jQuery(document).ready(function(){ 
    jQuery(".input_0").focus(function(e){
        jQuery(this).siblings(".input_hint").hide();
    });
    jQuery(".input_0").blur(function(e){
        jQuery(this).val(jQuery.trim(jQuery(this).val()));
        if((jQuery(this).val()).length == 0)
            jQuery(this).siblings(".input_hint").show();
    });
    jQuery(".input_hint").click(function(e){
        e.stopPropagation();
        jQuery(this).siblings(".input_0").focus();
    });
    jQuery("#btnRegister").click(function(){
		window.location.href = '__APP__/Reg/us_reg/';
	});
});

</script> 
<body style="width:320px;height:500px;">
	<div id="bg"></div>
	<div class="register-container container">
	<div class="row">
		<div class="register span5" style="background-size: cover;">
			<form method='post' name="login" id="form1" onsubmit="return false" style="background:rgba(255,255,255,0.3);margin-left:0px;margin-right:0px;margin-bottom:0px;">
			<div class="form-group" style="margin-top:20px;">
					<h4><span><a href="http://www.kuaiyuguoji.club">简体中文 | </a></span><span><a href="http://www.kuaiyuguoji.club/en">English</a></span></h4>
					</div>
				<div class="form-group" style="margin-top:20px;">
					<h4><span>Online International Education Of KuaiYu</span></h4>
					<label for="account">username：</label> <input type="text"
					id="account" name="account" placeholder="please input the username..."
					maxlength="10"></div>
				<div class="form-group"><label for="password">password：</label> <input type="password"
					id="password" name="password" placeholder="please input the password..."
					maxlength="16"></div>
				<div class="form-group"><label for="verify">Captcha：</label><input name="verify"
					id="verify" type="text" onKeyDown="keydown(event)"
					check="Require" value="" maxlength="4" style="width: 75%" />
					&nbsp;&nbsp;&nbsp;&nbsp; <img id="verifyImg"
					src="__URL__/verify/" width="55" onClick="fleshVerify()"
					border="0" alt="点击刷新验证码" style="cursor: pointer"
					align="absmiddle" /></div>
				<div class="form-group"><button name="button" type="submit" id="btn_submit" style="margin-top:20px;"
						onClick="ThinkAjax.sendForm('form1','__URL__/checkLogin/',loginHandle,'result')">Login</button>
					<input type="hidden" name="ajax" value="1"></div>
				<div class="form-group"><button name="button" type="button" id="btnRegister" style="margin-top:20px;">Register</button></div>
				<div class="form-group"><div class="error" style="margin-bottom:20px;"><span id="result"></span></div></div>
			</form>
		</div>
	</div>
	
	<!--
	<div class="login-layout">
        <form method='post' name="login" id="form1" onsubmit="return false">
            <div class="login-form" style="position: relative">
                <div class="formContent">
                	<div class="title" align="center">管理中心</div>
                    <div class="formInfo">
                    	<div class="formText">
                        	<i class="icon icon-user"></i>
                            <input type="text" name="account" autocomplete="off" class="input-text" value="" placeholder="用户名" />
                        </div>
                        <div class="formText">
                        	<i class="icon icon-pwd"></i>
                            <input type="password" name="password" autocomplete="off" class="input-text" value="" placeholder="密  码" />
                        </div>
                        <div class="formText">
                            <i class="icon icon-chick"></i>
                            <input type="text" name="verify" autocomplete="off" class="input-text chick_ue" value="" placeholder="验证码" />
                      <span class="input-group-addon" >
                        <img id="verifyImg" src="__URL__/verify/" width="55" onClick="fleshVerify()" border="0" alt="点击刷新验证码" style="cursor:pointer" align="absmiddle" />
                        </span>

                        </div>
                       <div class="formText">
                            <a href="/index.php/admin/Admin/forget_pwd" class="forget_pwd">忘记密码？</a>
                        </div>
						<div class="formText">
                          	<input type="submit" name="submit" class="btn btn-info" style="width:200px; height:30px;" id="btn_submit" value="登录" onClick="ThinkAjax.sendForm('form1','__URL__/checkLogin/',loginHandle,'result')">
                            <input type="hidden" name="ajax" value="1">
                       </div>
                    </div>
                </div>
            </div>
            <div class="form-group"><div class="error"><span id="result"></span></div></div>
        </form>
    </div>--> 
    <!--<script type="text/javascript" src="js/jquery.purebox.js"></script> -->   


</body>
</html>
<script language="JavaScript">
<!--
var PUBLIC   =   '__PUBLIC__';
ThinkAjax.image = [  '__PUBLIC__/Images/loading2.gif', '__PUBLIC__/Images/ok.gif','__PUBLIC__/Images/update.gif' ]
ThinkAjax.updateTip =   '登录中～';
function loginHandle(data,status){
if (status==1)
{
$('result').innerHTML   =   '<span style="color:blue"><img SRC="__PUBLIC__/Images/ok.gif" WIDTH="20" HEIGHT="20" BORDER="0" ALT="" align="absmiddle" > 登录成功！3 秒后跳转～</span>';
$('form1').reset();
window.location = '__URL__';
}
}
function keydown(e){
    var e = e || event;
    if (e.keyCode==13)
    {
    ThinkAjax.sendForm('form1','__URL__/checkLogin/',loginHandle,'result');
    }
}
function fleshVerify(type){
//重载验证码
var timenow = new Date().getTime();
if (type)
{
$('verifyImg').src= '__URL__/verify/adv/1/'+timenow;
}else{
$('verifyImg').src= '__URL__/verify/'+timenow;
}

}
function checkRadio(){
    alert("您不是该地区的ID");
    window.location = '__URL__/login';
}

//-->
</script>
<script>
	// 定义图片路径 {num} 为 可变的图片序号
	var bgImgUrl = '__PUBLIC__/resource/assets/img/backgrounds/{num}.jpg', bgNum,
		bgImgArr = [],
		bgDiv = document.getElementById("bg");
	// 组合数组 此处 5 为 图开始序号 结束 6
	for (var i=3; i <= 4; i++){
		bgImgArr.push(bgImgUrl.replace('{num}', i));
	}
	setBGimg();
	function setBGimg(d){
		if(!bgNum || bgNum >= bgImgArr.length) bgNum = 0;
		bgDiv.style.opacity = .001;
		setTimeout(function(){
			bgDiv.style.backgroundImage = 'url('+ bgImgArr[bgNum] +')';
			bgNum++;
			bgDiv.style.opacity = 1;
		}, 1000);
		if(typeof d == 'undefined')
		setInterval(function(){setBGimg(true);}, 6000);
		// 上一行的 6000 是背景图片自动切换时间(单位 毫秒)
	}
	</script>