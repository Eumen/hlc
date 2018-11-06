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

<script language=javascript src="__PUBLIC__/Js/wpCalendar.js"></script>
<div class="ncenter_box">
<div class="accounttitle"><h1>奖金查询 </h1></div>
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0">
	<thead>
    <tr>
        <th><span>结算时间</span></th>
        <th <?php echo ($c_b[1]); ?>><span><?php echo ($fee_s7[0]); ?></span></th>
        <th <?php echo ($c_b[0]); ?>><span><?php echo ($b_b[0]); ?></span></th>
        <th <?php echo ($c_b[12]); ?>><span><?php echo ($b_b[12]); ?></span></th>
    </tr>
	</thead>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
		<td><?php echo (date('Y-m-d H:i:s',$vo['e_date'])); ?></td>
		<td <?php echo ($c_b[1]); ?>><?php echo ($vo['b1']); ?></td>
		<td <?php echo ($c_b[0]); ?>><?php echo ($vo['b0']); ?></td>
		<td <?php echo ($c_b[12]); ?>><a href="__URL__/adminFinanceTableShow/did/<?php echo ($vo['did']); ?>/" title="查看这一期得奖会员">查看</a></td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	<tr align="center">
		<td>总计：</td>
		<td <?php echo ($c_b[1]); ?>><?php echo ($count[1]); ?></td>
		<td <?php echo ($c_b[0]); ?>><?php echo ($count[0]); ?></td>
		<td <?php echo ($c_b[12]); ?>>&nbsp;</td>
	</tr>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
    <tr>
    <td colspan="25" class="tabletd"><form id="form1" name="form1" method="post" action="__URL__/adminFinanceTable">奖金日期：<input name="FanNowDate" type="text" id="FanNowDate" onFocus="showCalendar(this)" readonly /> <input type="submit" name="Submit" value="查询" class="button_text" />
    &nbsp;&nbsp; </form></td>
    <td width="50%"><?php echo ($page); ?></td>
    </tr>
</table>
<table width="100%" align="center">

    <tr>
    <td>    
    <form id="form1" name="form1" method="post" action="__APP__/Bonus/financeTable">
		会员编号：
		    <input name="UserID" type="text"id="UserID" title="帐号查询" maxlength="200" >
		  <input type="submit" name="Submit" value="搜索" class="bt_tj"/>
		</form>
    </td>
    </tr>
</table>
</div>
</body>
</html>

<script>new TableSorter("tb1");</script>