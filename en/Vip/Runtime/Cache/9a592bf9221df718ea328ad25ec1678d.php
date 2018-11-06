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

<div id="wrap">
	<!-- Fixed navbar -->
	<div class="container">
		<div class="row center">
			<div class="col-xs-12">
				<button class="btn-lg btn-primary" type="button"
					onclick="if(confirm('确定分红吗?')) location.href='__APP__/Fck/xxx';else return false;">每日分红</button>
			</div>
		</div>
		<br />
		<div class="row center">
			<div class="col-xs-12">
				<button class="btn-lg btn-info" type="button"
					onclick="location.href='__APP__/Bonus/adminFinanceTable'">奖金查询</button>
			</div>
		</div>
		<br />
		<div class="row center">
			<div class="col-xs-12">
				<button class="btn-lg btn-primary" type="button"
					onclick="location.href='__APP__/YouZi/adminMenber'">会员管理</button>
			</div>
		</div>
		<br />
		<div class="row center">
			<div class="col-xs-12">
				<button class="btn-lg btn-info" type="button"
					onclick="location.href='__APP__/YouZi/adminAgents'">复投审核</button>
			</div>
		</div>
		<br />
		<div class="row center">
			<div class="col-xs-12">
				<button class="btn-lg btn-primary" type="button"
					onclick="location.href='__APP__/YouZi/adminmoneyflows'">货币流向</button>
			</div>
		</div>
		<br />
		<div class="row center">
			<div class="col-xs-12">
				<button class="btn-lg btn-info" type="button"
					onclick="location.href='__APP__/Currency/adminCurrency'">提现管理</button>
			</div>
		</div>
		<br />
		<div class="row center">
			<div class="col-xs-12">
				<button class="btn-lg btn-primary" type="button"
					onclick="location.href='__APP__/Recharge/adminCurrencyRecharge'">充值管理</button>
			</div>
		</div>
		<br />
		<div class="row center">
			<div class="col-xs-12">
				<button class="btn-lg btn-info" type="button"
					onclick="location.href='__APP__/News/adminnews'">公告管理</button>
			</div>
		</div>
		<br />
		<div class="row center">
			<div class="col-xs-12">
				<button class="btn-lg btn-primary" type="button"
					onclick="location.href='__APP__/YouZi/setParameter'">参数设置</button>
			</div>
		</div>
		<br />
		<div class="row center">
			<div class="col-xs-12">
				<button class="btn-lg btn-info" type="button"
					onclick="location.href='__APP__/YouZi/setPrice'">汉语币价格</button>
			</div>
		</div>
		<br />
		<div class="row center">
			<div class="col-xs-12">
				<button class="btn-lg btn-danger" type="button"
					onclick="location.href='__APP__/YouZi/delTable'">清空数据</button>
			</div>
		</div>
		<hr>
	</div>
</div>
<footer class="footer" style="font-size: 80%;width:100%;margin:0px;padding:0px;">
	<div class="row" align="center">
		<p>Copyright © 2018 tainuoshengwu.com. All Rights Reserved.</p>
	</div>
</footer>

</body>
</html>