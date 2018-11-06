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

<div class="ncenter_box">
<div class="accounttitle"><h1>参数设置 </h1></div>
<form method='post' id="myform" action="__URL__/setParameterSave" >
<table width="100%" cellpadding=3 cellspacing=0 border=0 id="tb1" class="tab4">
<tr class="content_td">
                <td width="15%" >&nbsp;</td>
                <td width="85%">&nbsp;</td>
</tr>
<tr>
				<td align="right">级别：</td>
				<td class="left"><input name="s10" type="text" id="s10" value="<?php echo ($fee_s10); ?>" size="50" maxlength="80" />
                用|分割</td>
</tr>
<tr>
				<td align="right">注册投资：</td>
				<td class="left"><input name="s9" type="text" id="s9" value="<?php echo ($fee_s9); ?>" size="50" maxlength="80" />
                用|分割</td>
</tr>
<tr>
        <td align="right">静态奖：</td>
        <td class="left">
           每单 <input name="str1" type="text" id="str1" value="<?php echo ($fee_str1); ?>" size="5" maxlength="50" />元<br> 
           倍数  <input name="s5" type="text" id="s5" value="<?php echo ($fee_s5); ?>" size="5" maxlength="50" />倍
              </td>

</tr> 


<tr>
        <td align="right">直推奖：</td>
        <td class="left">
        <!--     直推人数：<input name="s4" type="text" id="s4" value="<?php echo ($fee_s4); ?>" size="20" maxlength="50" />用|分割
           <br>  -->
       <input name="s11" type="text" id="s11" value="<?php echo ($fee_s11); ?>" size="20" maxlength="50" />百分比 用|分割
          
                </td>
</tr>



<tr>
        <td align="right">管理奖：</td>
        <td class="left">
   <input name="str5" type="text" id="str5" value="<?php echo ($fee_str5); ?>" size="20" maxlength="80" />元
     <br><input name="s13" type="text" id="s13" value="<?php echo ($fee_s13); ?>" size="20" maxlength="80" />层数
            </td>
</tr>


<!-- <tr>
        <td align="right">爱心基金：</td>
        <td class="left"><input name="s13" type="text" id="s13" value="<?php echo ($fee_s13); ?>" size="8" maxlength="80" />百分比 </td>
</tr> -->

<tr>
        <td align="right">报单中心：</td>
        <td class="left">
          <input name="s1" type="text" id="s1" value="<?php echo ($fee_s1); ?>" size="8" maxlength="80" />元
            </td>
</tr>
<tr>
				<td align="right">报单费：</td>
				<td class="left"><input name="str9" type="text" id="str9" value="<?php echo ($fee_str9); ?>" size="8" maxlength="80" />百分比
                </td>
</tr>
<tr>
        <td align="right">报单推报单：</td>
        <td class="left"><input name="s7" type="text" id="s7" value="<?php echo ($fee_s7); ?>" size="8" maxlength="80" />百分比
                </td>
</tr>
<!-- <tr>
        <td align="right">平衡奖：</td>
        <td class="left"><input name="s14" type="text" id="s14" value="<?php echo ($fee_s14); ?>" size="20" maxlength="80" />层
        <br><input name="s12" type="text" id="s12" value="<?php echo ($fee_s12); ?>" size="20" maxlength="50" />元

        </td>
</tr> -->
<tr>
        <td align="right">领导奖：</td>
        <td class="left">
           <input name="s4" type="text" id="s4" value="<?php echo ($fee_s4); ?>" size="20" maxlength="50" /> 百分比 用|分割
                </td>
</tr>
<tr>
        <td align="right">董事分红：</td>
        <td class="left">
           <input name="s6" type="text" id="s6" value="<?php echo ($fee_s6); ?>" size="20" maxlength="50" /> 百分比
                </td>
</tr>
<tr>
				<td align="right">奖名称：</td>
				<td class="left"><input name="s18" type="text" id="s18" value="<?php echo ($fee_s18); ?>" size="100" maxlength="100" />用| 分割 </td>
</tr>
<!-- <tr>
        <td align="right">扣做重销：</td>
        <td class="left"><input name="s3" type="text" id="s3" value="<?php echo ($fee_s3); ?>" size="8" maxlength="80" />百分比 </td>
</tr> -->


<!-- <tr style="display:none">
				<td align="right">客服QQ号：</td>
				<td class="left"><input name="str7" type="text" id="str7" value="<?php echo ($fee_str7); ?>" size="80" maxlength="80" /> 用| 分割</td>
</tr> -->

<tr>
				<td align="right">充值账户：</td>
				<td class="left"><input name="str6" type="text" id="str6" value="<?php echo ($fee_str6); ?>" size="40" maxlength="80" />
                </td>
</tr>
<tr>
        <td align="right">消费积分：</td>
        <td class="left"><input name="s15" type="text" id="s15" value="<?php echo ($fee_s15); ?>" size="8" maxlength="80" /> 百分比</td>
</tr>
 <tr>
        <td align="right">复投积分：</td>
        <td class="left"><input name="str10" type="text" id="str10" value="<?php echo ($fee_str10); ?>" size="8" maxlength="80" />百分比
                </td>
</tr>

<tr>
        <td align="right">公益基金：</td>
        <td class="left"><input name="str11" type="text" id="str11" value="<?php echo ($fee_str11); ?>" size="8" maxlength="80" />百分比
                </td>
</tr>

<tr>
        <td align="right">平台管理费：</td>
        <td class="left"><input name="str7" type="text" id="str7" value="<?php echo ($fee_str7); ?>" size="8" maxlength="80" />元
                </td>
</tr> 
 <tr>
				<td align="right">最低提现额度：</td>
				<td class="left"><input name="s16" type="text" id="s16" value="<?php echo ($fee_s16); ?>" size="8" maxlength="12" />
                </td>
</tr>
<tr>
				<td align="right">提现手续费：</td>
				<td class="left"><input name="s8" type="text" id="s8" value="<?php echo ($fee_s8); ?>" size="8" maxlength="12" />
                百分比</td>
</tr>
<!-- <tr>
				<td align="right">最低转帐额度：</td>
				<td class="left"><input name="str3" type="text" id="str3" value="<?php echo ($fee_str3); ?>" size="8" maxlength="12" />
                </td>
</tr>  -->
<!-- <tr>
            <td colspan="3" style="height:5px;"><hr></td>
</tr> -->

<!-- <tr>
				<td align="right" class="tabr">报单比例：</td>
				<td class="left">
         现金积分:<input name="str18" type="text" id="str18" value="<?php echo ($fee_str18); ?>" size="8" maxlength="200" />百分比
          <br>
         注册积分:<input name="str19" type="text" id="str19" value="<?php echo ($fee_str19); ?>" size="8" maxlength="200" />百分比
                </td>
</tr> -->
<!--<tr>
				<td align="right" class="tabr">第三方商户名：</td>
				<td class="left">
                </td>
</tr>-->
<tr>
            <td colspan="3" style="height:5px;"><hr></td>
</tr>
<tr style="display:none">
    <td align="right">注册语言：</td>
    <td><span class="tLeft"><textarea name="str24" cols="60" rows="5" id="str29"><?php echo ($fee_str24); ?></textarea>
    每个语言用|分割</span></td>
</tr>
<tr style="display:none">
    <td align="right">注册国家：</td>
    <td><span class="tLeft"><textarea name="str25" cols="60" rows="5" id="str29"><?php echo ($fee_str25); ?></textarea>
    每个国家用|分割</span></td>
</tr>
<tr>
    <td align="right">关闭网站提示：</td>
    <td><textarea name="str27" cols="60" rows="5" id="str27"><?php echo ($fee_str27); ?></textarea>
    （200字内）
    </td>
</tr>
<!-- <tr>
    <td align="right">油卡类别：</td>
    <td><span class="tLeft"><textarea name="str17" cols="60" rows="5" id="str17"><?php echo ($fee_str17); ?></textarea>
    用|分割</span></td>
</tr> -->

<tr>
    <td align="right">开户银行：</td>
    <td><span class="tLeft"><textarea name="str29" cols="60" rows="5" id="str29"><?php echo ($fee_str29); ?></textarea>
    每家银行间用|分割</span></td>
</tr>

<tr>
    <td align="right">汇款信息：</td>
    <td><span class="tLeft">
      <textarea name="s17" cols="60" rows="5" id="s17"><?php echo ($fee_s17); ?></textarea>
    </span></td>
</tr>
<tr>
    <td align="right">会员注册成功信息：</td>
    <td><span class="tLeft">
      <textarea name="str28" cols="60" rows="5" id="str28"><?php echo ($fee_str28); ?></textarea>
    </span></td>
</tr>
<tr style="display:none">
    <td align="right">密保问题：</td>
    <td><span class="tLeft">
      <textarea name="str99" cols="60" rows="6" id="str99"><?php echo ($fee_str99); ?></textarea>
    每个问题用|分割</span></td>
</tr>
<tr>
            <td colspan="3" style="height:5px;"><hr></td>
</tr>
<tr>
  <td align="right">登录设置：</td>
  <td class="left">
  <input type="radio" name="i1" id="i1" value="0" <?php if(($fee_i1) == "0"): ?>checked<?php endif; ?>  class="ipt_radi" />
  允许
  <input type="radio" name="i1" id="i1" value="1" <?php if(($fee_i1) == "1"): ?>checked<?php endif; ?>  class="ipt_radi" />
  不允许 <span class="stytle1">(是否允许一个用户同时多人在线！)</span>
  </td>
</tr>
<tr style="display:none">
  <td align="right">手动匹配：</td>
  <td class="left">
  <input type="radio" name="i2" id="i2" value="1" <?php if(($fee_i2) == "1"): ?>checked<?php endif; ?> class="ipt_radi"/>
    开启
  <input type="radio" name="i2" id="i2" value="0" <?php if(($fee_i2) == "0"): ?>checked<?php endif; ?> class="ipt_radi"/>
    关闭
	</td>
</tr>
<tr>
  <td align="right">前台设置：</td>
  <td class="left"><input name="i3" type="radio" id="i3" value="0" <?php if(($fee_i3) == "0"): ?>checked<?php endif; ?> class="ipt_radi"/>
    开启
      <input type="radio" name="i3" id="i3" value="1" <?php if(($fee_i3) == "1"): ?>checked<?php endif; ?> class="ipt_radi"/>
      关闭 <span class="stytle1">(关闭前台会员登录！)</span></td>
</tr>
<tr  style="display:none">
  <td align="right">游客注册设置：</td>
  <td class="left"><input name="i9" type="radio" id="i9" value="0" <?php if(($fee_i9) == "0"): ?>checked<?php endif; ?> class="ipt_radi"/>
    开启
      <input type="radio" name="i9" id="i9" value="1" <?php if(($fee_i9) == "1"): ?>checked<?php endif; ?> class="ipt_radi"/>
      关闭 <span class="stytle1">(关闭/关闭游客注册！)</span></td>
</tr>

<tr  style="display:none">
  <td align="right">注册金额设置：</td>
  <td class="left">
      <input type="radio" name="i4" id="i4" value="1" <?php if(($fee_i4) == "1"): ?>checked<?php endif; ?> class="ipt_radi"/>
      开启
      <input name="i4" type="radio" id="i4" value="0" <?php if(($fee_i4) == "0"): ?>checked<?php endif; ?> class="ipt_radi"/>
      关闭 <span class="stytle1">(开启/关闭注册金额！)</span></td>
</tr>
<tr>
				<td align="right">&nbsp;</td>
				<td class="left">&nbsp;</td>
</tr>
<tr>
  <td></td>
  <td class="left">
    <input type="submit" value="修改" class="button_text">
    <input type="reset" value="还原" class="button_text"></td>
</tr>
</table>
</form>
</div>
</body>
</html>