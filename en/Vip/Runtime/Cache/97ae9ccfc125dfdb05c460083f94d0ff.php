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
<div class="accounttitle"><h1>充值管理 </h1></div>
<SCRIPT language=JavaScript>
function checklogin() {
	if (document.myform.UserID.value=="") {
		alert("请输入会员编号!");
		myform.UserID.focus();
		return false;
	}
	if (document.myform.ePoints.value=="") {
		alert("请输入充值金额!");
		myform.ePoints.focus();
		return false;
	}

	if(confirm('温馨提示：\n\n请确认以下货币充值信息正确性！ \n\n充入会员编号： '+ document.myform.UserID.value+' \n\n充值金额： '+document.myform.ePoints.value+' 元'))
	{
		this.document.myform.submit();
		return true;
	}else{
		return false;
	}

}
</SCRIPT>

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
<!-- 列表显示区域  -->
<form id="myform" name="myform" method="post"  action="__URL__/adminCurrencyRechargeAdd">
<table width="100%" class="tab4" border="0" cellpadding="3" cellspacing="0">
<tr>
  <td width="37%" align="right">&nbsp;</td>
  <td width="63%">为商户充值</td>
</tr>
<tr>
  <td align="right">充值会员编号：</td>
  <td><input name="UserID" type="text" id="UserID" maxlength="50" />
    <span style="color: #FF3300;">*</span></td>
</tr>
<tr>
  <td align="right">充值类型：</td>
  <td><select name="stype">
<!--       <option value="0">充值电子积分</option> -->
      <option value="1">充值消费积分</option>
      </select></td>
</tr>
<tr>
  <td align="right">充值金额：</td>
  <td><input name="ePoints" type="text" id="ePoints" size="10" maxlength="12" />
    <span style="color: #FF3300;">*（要减少积分值，输入负金额即可！）</span></td>
</tr>

  <td align="right">&nbsp;</td>
  <td><span class="fLeft">
    <input type="button" name="Actions" id="Actions" value="确定充值" class="bt_tj" onclick="checklogin()"/>
  </span></td>
</tr>
</table>
</form>
<form name="form3" method="post" action="__URL__/adminCurrencyRechargeAC">
<table width="100%" class="tab3" border="0" cellpadding="3" cellspacing="1" id="tb1" bgcolor="#b9c8d0" >
<tr class="content_td" align="center">
    <th >
        <input type="checkbox" name="chkall" value="checkbox" onclick="CheckAll(this.form)"  class="btn2" id="chkall" />
      </th>
    <th nowrap ><span>会员编号</span></th>
    <th nowrap ><span>充值金额</span></th>
    <th nowrap ><span>汇款金额</span></th>
    <th nowrap ><span>充值类型</span></th>
    <th nowrap ><span>充值时间</span></th>
    <th nowrap ><span>确认时间</span></th>
    <th nowrap ><span>账号</span></th>
    <th nowrap ><span>状态</span></th>
</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="content_td" align="center">
	<td><div align="center">
	  <input type="checkbox" name="tabledb[]" value="<?php echo ($vo['id']); ?>" class="btn2" />
	</div></td>
	<td><?php echo ($vo['user_id']); ?></td>
	<td><span class="STYLE1"><?php echo ($vo['epoint']); ?></span></td>
	<td><span class="STYLE1"><?php echo ($vo['huikuan']); ?></span></td>
	<td>
		<?php if(($vo["stype"]) == "0"): ?>充入电子积分<?php endif; ?>
		<?php if(($vo["stype"]) == "1"): ?>充入现金积分<?php endif; ?>
		<?php if(($vo["stype"]) == "2"): ?>充入激活积分<?php endif; ?>
	</td>
	<td><?php echo (date('Y-m-d H:i:s',$vo["rdt"])); ?></td>
	<td><?php if(($vo["pdt"]) > "0"): echo (date('Y-m-d H:i:s',$vo["pdt"])); endif; ?></td>
	<td><?php echo ($vo['zhuanghao']); ?></td>
	<td><?php if(($vo['is_pay']) == "1"): ?><span style="color: #F00;">已确认</span><?php endif; if(($vo['is_pay']) == "0"): ?><span style="color: #090;">未确认</span><?php endif; ?></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>

<tr class="tab3_bottom">
<td>&nbsp;</td>
<td align="center">总计：</td>
<td align="center"><?php echo ($m_count); ?></td>

<td align="center"><?php echo ($m_count); ?></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>

</tr>
<tr>
    	<td colspan="9">
<input name="全选" type="button" class="bt_tj" id="全选" onclick="CheckAll(this.form)" value="全选" />	  &nbsp; &nbsp;
	  <input type="submit" name="action" value="确认" class="bt_tj" onclick="{if(confirm('确定吗?')){return true;}return false;}">
	  &nbsp; &nbsp;
	  <input type="submit" name="action" value="删除" class="bt_tj" onclick="{if(confirm('确定删除吗?')){return true;}return false;}"></td>
        </td>
        
    </tr>

</table>
</form>
<table width="100%" class="tab3_bottom" border="0" cellpadding="0" cellspacing="1">
  <tr>
    	<td width="50%">
</td>
        </td>
        <td width="50%"><?php echo ($page); ?></td>
    </tr>
</table>

<table width="100%" align="center">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <td align="center">
    <form method='post' action="__URL__/adminCurrencyRecharge">
    开始日期：<input name="sNowDate" type="text" id="sNowDate" onFocus="showCalendar(this)" readonly /> 
     &nbsp;结束日期：  <input name="endNowDate" type="text" id="endNowDate" onFocus="showCalendar(this)" readonly />
    
		会员编号：
		    <input name="UserID" type="text"id="UserID" title="帐号查询" maxlength="200" >
		  <input type="submit" name="Submit" value="搜索" class="bt_tj"/>
		</form>
    </td>
    </tr>
</table>
<div class="bottom"></div>
</div>
</body>
</html>
<script>new TableSorter("tb1");</script>