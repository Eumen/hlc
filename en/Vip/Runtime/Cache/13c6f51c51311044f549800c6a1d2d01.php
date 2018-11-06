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

<script type="text/javascript" src="__PUBLIC__/Js/Ajax/ThinkAjax-1.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/UserJs.js"></script>
<script language='javascript'>
 function CheckForm(){
	if(confirm('您确定提现金额 '+document.form1.ePoints.value+' 吗？'))
	{
	  return true;
	}else{
       return false;
    }
}
function yhServer(Ful){
	str = $F(Ful).replace(/^\s+|\s+$/g,"");
	ThinkAjax.send('__URL__/check_CCuser/','ajax=1&userid='+str,'',Ful+'1');
}
</script>
<div class="ncenter_box">
<div class="accounttitle"><h4>Withdrawal Applyment </h4></div>
<form name="form1" method="post" action="__URL__/frontCurrencyConfirm" onSubmit="{return CheckForm();}">
  <table width="100%" border="0" cellpadding="3" cellspacing="0">
    
      <tr>
        <td>&nbsp;</td>
        <td width="45%">&nbsp;</td>
        <td width="30%">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="right">Cost Point：</td>
        <td colspan="2"><span class="hong"><?php echo ($rs['agent_use']); ?></span></td></tr>
		
	 <!-- <tr>
        <td height="30" align="right">提现账户：</td>
        <td colspan="2"><span class="hong"><?php echo ($rs['agent_xf']); ?></span></td></tr>
		
      <tr> -->
        <td width="25%" height="30">&nbsp;</td>
        <td colspan="2"><span style="color:red;"><!--提现手续费 <?php echo ($menber); ?> %，-->the minmium <?php echo ($minn); ?></span></td>
      </tr>
      <tr>
        <td height="30" align="right"><?php echo ($User_namex); ?>：</td>
        <td><input name="UserID" type="text" readonly="readonly" value="<?php echo ($rs['user_id']); ?>"/></td>
        <td></td>
      </tr>
      <tr>
        <td height="30" align="right">Type：</td>
        <td>
        <select name="ttype">
        <option value="0">cash account</option>
		<!-- <option value="1">提取现金账户</option> -->
        </select>
        </td>
        <td></td>
      </tr>
       <tr>
        <td height="30" align="right">Platform：</td>
        <td>
        <select name="type">
        <option value="0">Bank Card</option>
        </select>
        </td>
        <td></td>
      </tr>
      <tr>
        <td height="30" align="right">Amount：</td>
        <td><input name="ePoints" type="text" id="ePoints" value=""/></td>
        <td></td>
      </tr>
      <tr>
        <td height="30" align="right">&nbsp;</td>
        <td><input type="submit" name="Submit" value="Confirm" class="button_text" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
  </table></form>
<br />
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0">
	<thead>
		<tr>
			<th><span>Account</span></th>
			<th><span>Amount</span></th>
			<th><span>Fee</span></th>
			<th><span>Real Amount</span></th>
			<th><span>Withdrawal Time</span></th>
			<th><span>Withdrawal Type</span></th>
			<th><span>Withdrawal Card</span></th>
            <th><span>Status</span></th>
        </tr>
	</thead>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
    <td><?php echo ($rs['user_id']); ?></td>
    <td><span style="color: #F00;"><?php echo ($vo['money']); ?></span></td>
    <td><?php echo ($vo['x1']); ?> %</span></td>
    <td><span style="color: #F00;"><?php echo ($vo['money_two']); ?></td>
    <!-- <td><?php echo (cx_cname($vo['money_two'])); ?></span></td> -->
    <td><?php echo (date('Y-m-d H:i:s',$vo["rdt"])); ?></td>
    <td><?php if(($vo['t_type']) == "0"): ?>提取消费积分<?php else: ?>提取钛宝提现账户<?php endif; ?></td>
    <td><?php echo ($rs['bank_card']); ?></td>
    <td><?php if(($vo['is_pay']) == "0"): ?><span style="color: #FF3300;">UnConfirm</span>
          <!-- |<a id="aa" href="__URL__/frontCurrencyDel/id/<?php echo ($vo['id']); ?>"><span style="color: #0000FF;">删除</span></a> --><?php endif; ?>  
          <?php if(($vo['is_pay']) == "1"): ?>Confirmed<?php endif; ?></td>
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