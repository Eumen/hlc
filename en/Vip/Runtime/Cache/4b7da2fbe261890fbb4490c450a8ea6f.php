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
<div class="accounttitle"><h1>会员管理 </h1></div>
<div><h4>&nbsp;&nbsp;&nbsp;&nbsp;总业绩：<?php echo ($f4_count22); ?> </h4></div>
<form name="form3" method="post" action="__URL__/adminMenberAC">
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0">
	<thead>
    <tr align="center">
        <th></th>
        <th><span>会员编号</span></th>
		<th><span>密码</span></th>
		<th><span>推荐人</span></th>
		<th><span>消费积分</span></th>
        <th><span>开通时间</span></th>
        <th><span>注册金额</span></th>
         <th><span>复投次数</span></th>
        <th><span>提现总额</span></th>
        <th><span>会员状态</span></th>
<!--         <th><span>是否开启分红</span></th> -->
<!--         <th><span>是否锁定现金积分</span></th> -->
        </tr>
    </thead>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="content_td lz" align="center">
        <td><input type="checkbox" name="tabledb[]" value="<?php echo ($vo['id']); ?>" class="btn2" /></td>
        <td><a href="__URL__/adminuserData/PT_id/<?php echo ($vo['id']); ?>"><?php echo ($vo['user_id']); ?></a></td>
		<td><?php echo ($vo['pwd1']); ?></td>
		<td><?php echo ($vo['re_name']); ?></td>
		<td><?php echo ($vo['agent_use']); ?></td>
        <td><?php echo (date('Y-m-d H:i:s',$vo["pdt"])); ?></td>
        <td><?php echo ($vo['cpzj']); ?></td>
        <td><?php echo ($vo['is_cc']); ?></td>
        <td><?php echo ($vo['shang_ach']); ?></td>
        <td><?php if(($vo['is_lock']) == "0"): ?><span style="color: #FF0000;">未锁定</span><?php else: ?>已锁定<?php endif; if(($vo['is_pay']) == "2"): ?>[空单]<?php endif; ?></td>
<!--         <td><?php if(($vo['is_day_active']) == "0"): ?><span style="color: #FF0000;">已开启</span><?php else: ?>已关闭<?php endif; ?></td> -->
<!--         <td><?php if(($vo['is_lock_use']) == "0"): ?><span style="color: #FF0000;">已开启</span><?php else: ?>已锁定<?php endif; ?></td> -->
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>


<!--<tr style="display:none">
<td colspan="13" align="center"><font color="#FF0000">总业绩： <?php echo ($f4_count); ?></font></td>
</tr>-->
</table>


<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
    <tr>
   	  <td width="60%">
      <input name="全选" type="button" class="btn-xs btn-default" id="全选" onclick="CheckAll(this.form)" value="全选" />	  &nbsp;&nbsp;
	  <input type="submit" name="action" value="开启会员" class="btn-xs btn-success" onclick="{if(confirm('确定要开启会员吗?')){return true;}return false;}">&nbsp;&nbsp;
	  <input type="submit" name="action" value="锁定会员" class="btn-xs btn-default" onclick="{if(confirm('确定要锁定会员吗?')){return true;}return false;}">&nbsp;&nbsp;
      <input type="submit" name="action" value="删除会员" class="btn-xs btn-danger" onclick="{if(confirm('确定要删除会员吗?')){return true;}return false;}">&nbsp;&nbsp;
<!-- 	  <input type="submit" name="action" value="开启奖金" class="btn-xs btn-success" onclick="{if(confirm('确定要开启奖金吗?')){return true;}return false;}">&nbsp;&nbsp; -->
<!-- 	  <input type="submit" name="action" value="关闭奖金" class="btn-xs btn-default" onclick="{if(confirm('确定要关闭奖金吗?')){return true;}return false;}">&nbsp;&nbsp; -->
	  <input type="submit" name="action" value="开启分红" class="btn-xs btn-success" onclick="{if(confirm('确定要开启分红吗?')){return true;}return false;}">&nbsp;&nbsp;
	  <input type="submit" name="action" value="关闭分红" class="btn-xs btn-default" onclick="{if(confirm('确定要关闭分红吗?')){return true;}return false;}">&nbsp;&nbsp;
	  <input type="submit" name="action" value="开启现金积分" class="btn-xs btn-success" onclick="{if(confirm('确定要开启现金积分吗?')){return true;}return false;}">&nbsp;&nbsp;
	  <input type="submit" name="action" value="锁定现金积分" class="btn-xs btn-default" onclick="{if(confirm('确定要锁定现金积分吗?')){return true;}return false;}">&nbsp;&nbsp;
    </tr>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
    <tr>
        <td><?php echo ($page); ?></td>
    </tr>
</table>
</form>
</div>
</body>
</html>