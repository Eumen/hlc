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

<div class="ncenter_box">
<div class="accounttitle"><h1>财务明细&nbsp;&nbsp;[<a href='javascript:history.back()'>返回列表</a>] </h1></div>
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0">
	<thead>
		<tr>
			<th <?php if(empty($User_namex)): ?>style="display:none"<?php endif; ?>><span><?php echo ($User_namex); ?></span></th>
			<!--<th><span>名称</span></th>-->
			<th><span>金额</span></th>
			<th><span>时间</span></th>
			<th><span>备注</span></th>
		</tr>
	</thead>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center" class="content_td">
		<td <?php if(empty($User_namex)): ?>style="display:none"<?php endif; ?>><?php echo ($vo['user_id']); ?></td>
		<!--<td><?php echo ($vo['action_type']); ?></td>-->
		<td class="hong"><?php echo ($vo['epoints']); ?></td>
		<td>
        <?php if(($vo['action_type'] == 3)): if(($vo['act_pdt']) > "0"): echo (date('Y-m-d H:i:s',$vo["act_pdt"])); ?>
        <?php else: ?>
        <?php echo (date('Y-m-d H:i:s',$vo["pdt"])); endif; ?>
        <?php else: ?>
        <?php echo (date('Y-m-d H:i:s',$vo["pdt"])); endif; ?></td>
		<td>
        &nbsp;
         <?php if(($vo['action_type']) == $vo["bz"]): if(($vo['action_type']) == "100"): echo ($s18['0']); endif; ?>
         <?php if(($vo['action_type']) == "1"): echo ($fee_s7[0]); endif; ?>
         <?php if(($vo['action_type']) == "2"): echo ($fee_s7[1]); endif; ?>
         <?php if(($vo['action_type']) == "3"): echo ($fee_s7[2]); endif; ?>
         <?php if(($vo['action_type']) == "4"): echo ($fee_s7[3]); endif; ?>
         <?php if(($vo['action_type']) == "5"): echo ($fee_s7[4]); endif; ?>
         <?php if(($vo['action_type']) == "6"): echo ($fee_s7[5]); endif; ?>
         <?php if(($vo['action_type']) == "7"): echo ($fee_s7[6]); endif; ?>
         <?php if(($vo['action_type']) == "8"): echo ($fee_s7[7]); endif; ?>
         <?php if(($vo['action_type']) == "9"): echo ($fee_s7[8]); endif; ?>
          <?php if(($vo['action_type']) == "10"): echo ($fee_s7[9]); endif; ?>
         <!--<?php if(($vo['action_type']) == "8"): ?>税收<?php endif; ?>
         <?php if(($vo['action_type']) == "9"): ?>报单奖<?php endif; ?>-->
         <?php if(($vo['action_type']) == "18"): ?>奖金提现<?php endif; ?>
         <?php if(($vo['action_type']) == "19"): ?>开通会员<?php endif; ?>
         <?php if(($vo['action_type']) == "20"): ?>货币转账<?php endif; ?>
         <?php if(($vo['action_type']) == "21"): ?>充值电子积分<?php endif; ?>
         <?php if(($vo['action_type']) == "23"): ?>充值消费积分<?php endif; ?>
         <?php if(($vo['action_type']) == "30"): ?>充值激活积分<?php endif; ?>
         <?php if(($vo['action_type']) == "24"): ?>复投积分复投<?php endif; ?>
         <?php if(($vo['action_type']) == "25"): ?>消费积分复投<?php endif; ?>
         <?php if(($vo['action_type']) == "29"): ?>电子积分复投<?php endif; ?>
         <?php else: echo ($vo["bz"]); endif; ?>
        </td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
    <tr>
        <td align="center"><?php echo ($page); ?></td>
    </tr>
</table>
</div>
</body>
</html>
<script>new TableSorter("tb1");</script>