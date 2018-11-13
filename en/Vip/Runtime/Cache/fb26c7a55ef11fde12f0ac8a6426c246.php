<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>会员管理系统</title>
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
			style="color: rgb(255, 255, 255); font-size: 16px;">首页</a>
		<a href="__APP__/Public/LogOut/" class="glyphicon glyphicon-log-out pull-right"
        	style="color: rgb(255, 255, 255); font-size: 16px;">退出</a>
	</div>
</div>

<div class="login">
<div class="ncenter_box">
<div class="accounttitle"><h1>注册成功 </h1></div>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" >
              <tr>
                <td class="zc_hong" style="line-height:30px;" align="center" colspan="2"><?php echo ($alert_msg); ?></td>
              </tr>
              <tr>
                <td class="zc_hong" style="line-height:30px;" align="center" colspan="2"><?php echo ($s17); ?></td>
              </tr>
              <tr>
                <td width="20%" style="line-height:30px;" align="right">会员编号：</td>
                <td width="80%" class="zc_hong" style="line-height:30px;"><?php echo ($myrs['user_id']); ?></td>
              </tr>
              <tr>
                <td style="line-height:30px;" align="right">注册费用：</td>
                <td class="zc_hong" style="line-height:30px;"><?php echo ($myrs['cpzj']); ?></td>
              </tr>
              <tr >
                <td height="30" align="center" colspan="2"><input name="提交" type="submit" class="button_text" onclick="location.href='<?php echo ($gourl); ?>'" value="完成注册"></td>
              </tr>
            </table>
</div>
</div>
</body>
</html>