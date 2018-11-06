<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Management System</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-Control" content="no-transform">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=2.0, user-scalable=1"> -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="layoutmode" content="standard">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="renderer" content="webkit">

<meta name="wap-font-scale" content="no">
<meta content="telephone=no" name="format-detection">
<meta http-equiv="Pragma" content="no-cache">
<link href="__PUBLIC__/Css/body.css" rel="stylesheet" media="screen" type="text/css" />
<link href="__PUBLIC__/Css/menu.css" rel="stylesheet" media="screen" type="text/css" />
<link href="__PUBLIC__/Css/main.css" rel="stylesheet" media="all" type="text/css" />
<link rel="stylesheet" type="text/css"
	href="__PUBLIC__/Css/bootstrap.min.css" title="default">
<link rel="stylesheet" type="text/css"
	href="__PUBLIC__/Css/bootstrap-theme.min.css" title="default">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/ace.css"
	title="default">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/buttons.css">
<style>
/* Sticky footer styles
-------------------------------------------------- */
html, body {
	height: 100%;
	/* The html and body elements cannot have any padding or margin. */
}

/* Wrapper for page content to push down footer */
#wrap {
	min-height: 100%;
	height: auto !important;
	height: 100%;
	/* Negative indent footer by its height */
	margin: 0 auto -60px;
	/* Pad bottom by footer height */
	padding: 0 0 60px;
}

/* Set the fixed height of the footer here */
/* Set the fixed height of the footer here */
.footer {
	padding-top: 15px;
	padding-bottom: 30px;
	margin-top: 50px;
	width: 100%;
	height: 40px;
	border-top: 4px solid #269abc;
}

#wrap>.container {
	padding: 10px 10px 0;
}
.container .credit {
	margin: 20px 0;
}

#footer>.container {
	padding-left: 15px;
	padding-right: 15px;
}

code {
	font-size: 80%;
}
</style>
<!-- <script src="__PUBLIC__/Js/Jquery/jquery-1.11.3.min.js"></script> -->
<!-- <script src="__PUBLIC__/Js/Jquery/bootstrap.min.js"></script> -->
<script language="JavaScript">
ifcheck = true;
function CheckAll(form)
{
	for (var i=0;i<form.elements.length-2;i++)
	{
		var e = form.elements[i];
		e.checked = ifcheck;
	}
	ifcheck = ifcheck == true ? false : true;
}
</script>

</head>
<body style="background-color: #f0f3ef;">
<div class="navbar-fixed-up" style="background-color: #41b9e7;">
	<div style="color: #ffffff;padding: 10px; margin-bottom:0;font-size: 16px; height: inherit;">
		<a class="glyphicon glyphicon-home" href="__APP__/"
			style="color: rgb(255, 255, 255); font-size: 16px;">Index</a>
		<a href="__APP__/Public/LogOut/" class="glyphicon glyphicon-log-out pull-right"
        	style="color: rgb(255, 255, 255); font-size: 16px;">Exit</a>
	</div>
</div>

<script type="text/javascript" src="__PUBLIC__/Js/UserJs.js"></script>
<div class="ncenter_box">
        <table width="100%" border="0" cellpadding="3" cellspacing="0">
        <form method='post' name="login" action="__URL__/changepasswordSave/">
          <tr>
            <td colspan="3" class="tabletd">&nbsp;</td>
            </tr>
          <tr>
            <td width="29%" align="right">Level：</td>
            <td width="14%"><input name="type" type="radio" class="ipt_radi" value="1" checked="checked" />
              一级&nbsp;&nbsp;&nbsp;&nbsp;
<!--   <input type="radio" name="type" value="2" class="ipt_radi" /> -->
<!--               二级 </td> -->
            <td width="57%">&nbsp;</td>
          </tr>
          <tr>
            <td width="29%" align="right">Old Password：</td>
            <td width="14%"><input name="oldpassword" id="oldpassword" type="password" maxlength="50" class="ipt" onkeyup="javascript:Null_Full(this.name)" onfocus="notice('0','')"  onblur="notice('0','none')"/></td>
            <td width="57%"><div id="oldpassword1" class="info"><div id="0" class="focus_r" style="display:none;"><div class="msg_tip">Please input the old password。</div></div></div></td>
          </tr>
          <tr>
            <td align="right">New Password：</td>
            <td><input  name="password" id="password" type="password" maxlength="50" class="ipt" onkeyup="javascript:Null_Full(this.name)" onfocus="notice('1','')" onblur="notice('1','none')"/></td>
            <td><div id="password1" class="info"><div id="1" class="focus_r" style="display:none;"><div class="msg_tip">Please input the new password。</div></div></div></td>
          </tr>
          <tr>
            <td align="right">Confirm New Password：</td>
            <td><input  name="repassword" id="repassword" type="password" maxlength="50" class="ipt" onkeyup="javascript:yhrePass(this.name,'password')" onfocus="notice('2','')" onblur="notice('2','none')"//></td>
            <td><div id="repassword1" class="info"><div id="2" class="focus_r" style="display:none;"><div class="msg_tip">Confirm new Password。</div></div></div></td>
          </tr>
          <tr>
            <td align="right">Captcha：</td>
            <td><input name="verify" type="text" class="small bLeftRequire" size="4" maxlength="4" />
                <img src="__APP__/Public/verify/" border="0" alt="点击刷新验证码" id="verifyImg" onclick="fleshVerify()" style="cursor:pointer" align="absmiddle" />&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" style="height:5px;"><hr></td>
            </tr>
          <tr>
<!--           <tr style="display:none"> -->
<!--             <td align="right">密保问题：</td> -->
<!--             <td><?php echo ($vo['wenti']); ?></td> -->
<!--             <td>&nbsp;</td> -->
<!--             </tr> -->
<!--           <tr style="display:none"> -->
<!--             <td align="right">请回答密保答案：</td> -->
<!--             <td><input name="wenti_dan" type="text" id="wenti_dan" value="" class="ipt"/></td> -->
<!--             <td>&nbsp;</td> -->
<!--           </tr> -->
          <tr>
            <td align="right">&nbsp;</td>
            <td><span class="tCenter">
              <input name="submit"  type="submit" class="button_text" value="Confirm" alt="confirm" />
              <input name="button"  type="reset" class="button_text" value="Reset" alt="reset" />
            </span></td>
            <td>&nbsp;</td>
          </tr>
          </form>
        </table>
</div>
</body>
</html>
<script language="JavaScript">
<!--
function fleshVerify(){
//重载验证码
var timenow = new Date().getTime();
$('verifyImg').src= '__APP__/Public/verify/'+timenow;
}
//-->
</script>