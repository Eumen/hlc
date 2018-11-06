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
<script language='javascript'>
function CheckForm(){
	if(document.form1.ePoints.value==""){
		alert("Please input the amount！");
		document.form1.ePoints.focus();
		return false;
	}
	if(confirm('Do you confirm to charge '+document.form1.ePoints.value+'？'))
	{
		var Null_Name = document.form1._hour.value;
		if (Null_Name)
		{
			str = Null_Name.replace(/^\s+|\s+$/g,"");
			if (!str == "")//判断是否为空
			{
				if (!isNaN(Null_Name))
				{
					if(Null_Name >= 0 && Null_Name <=24){
						return true;
					}else{ alert('小时输入有误'); return false; }
				}else{ alert('请输入数字'); return false; }

			}
		}
	}else{
	alert('You cancle the operation!');
       return false;
    }
}

</script>
<div class="ncenter_box">
<div class="accounttitle"><h4>Apply the point </h4></div>
  <table width="100%" border="0" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="4" style=" height:5px;"><hr></td>
      </tr>
    <tr>
      <td height="30" align="right">Cost point：</td>
      <td colspan="2"><span class="hong"><?php echo ($frs['agent_use']); ?></span></td>
      </tr>
<!-- 	<tr> -->
<!--       <td height="30" align="right">电子积分余额：</td> -->
<!--       <td colspan="2"><span class="hong"><?php echo ($frs['agent_cash']); ?></span></td> -->
<!--       </tr> -->
    <form name="form1" method="post" action="__URL__/currencyRechargeAC" onSubmit="{return CheckForm();}">
    <tr>
	  <td height="30" align="right">Amount：</td>
	  <td width="40%"><input name="ePoints" type="text" id="ePoints" maxlength="9" class="ipt" onkeyup="javascript:Null_Int(this.name)"/></td>
	  <td width="40%"><div id="ePoints1" class="info"><div id="0" class="focus_r"><div class="msg_tip">Please input your amount。</div></div></div></td>
    </tr>
    <tr>
	  <td height="30" align="right">Type：</td>
	  <td>
      <select name="stype">
<!--       <option value="0">充值电子积分</option> -->
      <option value="1">Cost Point</option>
      </select></td>
	  <td></td>
    </tr>
    <tr style="display:none">
      <td height="30" align="right">已汇款数额：</td>
	  <td ><input name="_money" type="text" id="_money" class="ipt" onkeyup="javascript:Null_Int(this.name)" onfocus="notice('1','')"  onblur="notice('1','none')" />
      </td><td><div id="_money1" class="info"><div id="1" class="focus_r" style="display:none;"><div class="msg_tip">请输入你汇款数额。</div></div></div></td>
    </tr>
<!--     <tr> -->
<!--       <td height="30" align="right">充值账号：</td> -->
<!-- 	  <td ><input name="_num" type="text" class="ipt" id="_num" value="<?php echo ($str6); ?>" size="30" readonly="readonly"/></td> -->
<!--       <td></td> -->
<!--     </tr> -->
<!--       <td></td> -->
<!--     </tr> -->
<!--     <tr> -->
<!--       <td width="20%" height="30" align="right">汇款时间：</td> -->
<!-- 	  <td colspan="2" width="80%"> -->
<!--       	  <input name="_year" size="5" type="text" id="_year" value=<?php echo ($nowdate['0']); ?>  /> 年 -->
<!--       	  <input name="_month" size="5" type="text" id="_month" value=<?php echo ($nowdate['1']); ?> /> 月 -->
<!--           <input name="_date" size="5" type="text" id="_date" value=<?php echo ($nowdate['2']); ?>  /> 日 -->
<!--           <input name="_hour" size="5" type="text" id="_hour" /> 时 -->
<!-- 		  <input name="_minute" size="5" type="text" id="_minute" /> 分 -->
<!-- 		  &nbsp;<span class="hong">(请输入汇款时间)</span> -->
<!--       </td> -->
<!--     </tr> -->
    <tr>
      <td height="30">&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" class="bt_tj" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	</form>
</table>
<br>
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0">
	<thead>
		<tr>
			<th><span><?php echo ($User_namex); ?></span></th>
			<th><span>Amount</span></th>
			<th><span>Type</span></th>
			<th><span>Date</span></th>
            <th><span>Number</span></th>
            <th><span>Account</span></th>
			<th><span>Status</span></th>
		</tr>
	</thead>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
        <td><?php echo ($vo['user_id']); ?></td>
        <td><?php echo ($vo['epoint']); ?></td>
        <td><?php if(($vo["stype"]) == "0"): ?>充入电子积分<?php else: ?>充入消费积分<?php endif; ?></td>
        <td><?php echo (date('Y-m-d H:i:s',$vo["rdt"])); ?></td>
        <td><?php echo ($vo['huikuan']); ?></td>
        <td><?php echo ($vo['zhuanghao']); ?></td>

        <td><?php if(($vo['is_pay']) == "0"): ?><span style="color: #FF3300;">UnConfirm</span><?php endif; if(($vo['is_pay']) == "1"): ?>Confirmed<?php endif; ?></td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
  <tr>
        <td align="center"><?php echo ($page); ?></td>
    </tr>
</table>
<div class="bottom"></div>
</div>
</body>
</html>