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
<style type="text/css">
.us_btn{height:27px; line-height:27px; font-size:12px; font-weight:bold; padding:0 10px; text-decoration:underline;}
.STYLE1 {color: #FF0000}
</style>
<div class="ncenter_box">
<div class="accounttitle"><h1>货币流向统计 </h1></div>
<table width="100%" border="0" cellpadding="0" cellspacing="3">
    <tr>
    <td>
    <form id="form1" name="form1" method="post" action="__URL__/adminmoneyflows">
    开始日期：<input name="S_Date" type="text" id="S_Date" onFocus="showCalendar(this)" readonly value="<?php echo ($S_Date); ?>" />
    &nbsp;&nbsp;
    结算日期：<input name="E_Date" type="text" id="E_Date" onFocus="showCalendar(this)" readonly value="<?php echo ($E_Date); ?>" />
    &nbsp;&nbsp;
    搜索会员：<input name="UserID" type="text" id="UserID" value="<?php echo ($UserID); ?>"/>
    &nbsp;&nbsp;
    <input type="submit" name="Submit" value="查询" class="button_text" /></form></td>
    </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="3">
    <tr>
    <td>
    <?php if(($ry) == "0"): ?><span class="us_btn">查看全部</span>
    <?php else: ?>
    <input type="button" name="action" value="查看全部" class="button_text" onclick="window.location='__URL__/adminmoneyflows/tp/0/S_Date/<?php echo ($S_Date); ?>/E_Date/<?php echo ($E_Date); ?>/UserID/<?php echo ($UserID); ?>/'"/><?php endif; ?>
    <?php if(is_array($fee_s7)): $ti = 0; $__LIST__ = $fee_s7;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tt): $mod = ($ti % 2 );++$ti; if(($ti) < "10"): if(($ry) == $ti): ?><span class="us_btn"><?php echo ($tt); ?></span>
    <?php else: ?>
    <input type="button" name="action" value="<?php echo ($tt); ?>" class="button_text" onclick="window.location='__URL__/adminmoneyflows/tp/<?php echo ($ti); ?>/S_Date/<?php echo ($S_Date); ?>/E_Date/<?php echo ($E_Date); ?>/UserID/<?php echo ($UserID); ?>/'"><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
    <?php if(($ry) == "18"): ?><span class="us_btn">奖金提现</span>
    <?php else: ?>
    <input type="button" name="action" value="奖金提现" class="button_text" onclick="window.location='__URL__/adminmoneyflows/tp/18/S_Date/<?php echo ($S_Date); ?>/E_Date/<?php echo ($E_Date); ?>/UserID/<?php echo ($UserID); ?>/'"><?php endif; ?>
    <?php if(($ry) == "19"): ?><span class="us_btn">开通会员</span>
    <?php else: ?>
    <input type="button" name="action" value="开通会员" class="button_text" onclick="window.location='__URL__/adminmoneyflows/tp/26/S_Date/<?php echo ($S_Date); ?>/E_Date/<?php echo ($E_Date); ?>/UserID/<?php echo ($UserID); ?>/'"><?php endif; ?>
<!--     <?php if(($ry) == "20"): ?>-->
<!--     <span class="us_btn">货币转账</span> -->
<!--     <?php else: ?> -->
<!--     <input type="button" name="action" value="货币转账" class="button_text" onclick="window.location='__URL__/adminmoneyflows/tp/27/S_Date/<?php echo ($S_Date); ?>/E_Date/<?php echo ($E_Date); ?>/UserID/<?php echo ($UserID); ?>/'"> -->
<!--<?php endif; ?> -->
<!--     <?php if(($ry) == "21"): ?>-->
<!--     <span class="us_btn">充值电子积分</span> -->
<!--     <?php else: ?> -->
<!--     <input type="button" name="action" value="充值电子积分" class="button_text" onclick="window.location='__URL__/adminmoneyflows/tp/21/S_Date/<?php echo ($S_Date); ?>/E_Date/<?php echo ($E_Date); ?>/UserID/<?php echo ($UserID); ?>/'"> -->
<!--<?php endif; ?> -->
    <?php if(($ry) == "23"): ?><span class="us_btn">充值消费积分</span>
    <?php else: ?>
    <input type="button" name="action" value="充值消费积分" class="button_text" onclick="window.location='__URL__/adminmoneyflows/tp/23/S_Date/<?php echo ($S_Date); ?>/E_Date/<?php echo ($E_Date); ?>/UserID/<?php echo ($UserID); ?>/'"><?php endif; ?>
    <?php if(($ry) == "25"): ?><span class="us_btn">消费积分复投</span>
    <?php else: ?>
    <input type="button" name="action" value="消费积分复投" class="button_text" onclick="window.location='__URL__/adminmoneyflows/tp/25/S_Date/<?php echo ($S_Date); ?>/E_Date/<?php echo ($E_Date); ?>/UserID/<?php echo ($UserID); ?>/'"><?php endif; ?>
      <!--<?php if(($ry) == "22"): ?><span class="us_btn">商城购物</span>
    <?php else: ?>
    <input type="button" name="action" value="商城购物" class="button_text" onclick="window.location='__URL__/adminmoneyflows/tp/22/S_Date/<?php echo ($S_Date); ?>/E_Date/<?php echo ($E_Date); ?>/UserID/<?php echo ($UserID); ?>/'"><?php endif; ?>-->
    </td>
    </tr>
</table>
<table width="100%" cellpadding=3 cellspacing="1" id="tb1" bgcolor="#b9c8d0" class="tab3">
  <tr align="center" class="content_td">
    <th nowrap >操作会员（一）</th>
    <th nowrap >操作会员（二）</th>
    <th nowrap ><span>金额</span></th>
    <th nowrap ><span>时间</span></th>
    <th nowrap ><span>备注</span></th>
  </tr>
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center" class="content_td">
    <td ><?php echo (user_id($vo['uid'])); ?></td>
    <td ><?php echo ($vo['user_id']); ?></td>
    <td ><span class="STYLE1"><?php echo ($vo['epoints']); ?></span></td>
    <td ><?php echo (date('Y-m-d H:i:s',$vo["pdt"])); ?></td>
    <td>
        &nbsp;
         <?php if(($vo['action_type']) == $vo["bz"]): if(($vo['action_type']) == "1"): echo ($fee_s7[0]); endif; ?>
         <?php if(($vo['action_type']) == "2"): echo ($fee_s7[1]); endif; ?>
         <?php if(($vo['action_type']) == "3"): echo ($fee_s7[2]); endif; ?>
         <?php if(($vo['action_type']) == "4"): echo ($fee_s7[3]); endif; ?>
         <?php if(($vo['action_type']) == "5"): echo ($fee_s7[4]); endif; ?>
         <?php if(($vo['action_type']) == "6"): echo ($fee_s7[5]); endif; ?>
         <?php if(($vo['action_type']) == "7"): echo ($fee_s7[6]); endif; ?>
         <?php if(($vo['action_type']) == "8"): echo ($fee_s7[7]); endif; ?>
         <?php if(($vo['action_type']) == "9"): echo ($fee_s7[8]); endif; ?>
         <!--<?php if(($vo['action_type']) == "8"): ?>税收<?php endif; ?>-->
         <?php if(($vo['action_type']) == "18"): ?>奖金提现<?php endif; ?>
         <?php if(($vo['action_type']) == "19"): ?>开通会员<?php endif; ?>
         <?php if(($vo['action_type']) == "20"): ?>货币转账<?php endif; ?>
         <?php if(($vo['action_type']) == "21"): ?>充值电子积分<?php endif; ?>
         <?php if(($vo['action_type']) == "22"): ?>商城购物<?php endif; ?>
          <?php if(($vo['action_type']) == "23"): ?>充值现金积分<?php endif; ?>
          <?php if(($vo['action_type']) == "24"): ?>复投积分复投<?php endif; ?>
           <?php if(($vo['action_type']) == "25"): ?>消费积分复投<?php endif; ?>
           <?php if(($vo['action_type']) == "29"): ?>电子积分复投<?php endif; ?>
         <!-- <?php if(($vo['action_type']) == "31"): ?>CQ币交易收入<?php endif; ?> -->
         <?php else: echo ($vo["bz"]); endif; ?>
        </td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<table width="600" align="center">
  <tr class="content_td">
    <td colspan="5" ><div align="center"><?php echo ($page); ?></div></td>
    </tr>
</table>
</div>
</body>
</html>
<script>new TableSorter("tb1");</script>