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
<div class="ncenter_box">
        <table width="100%" border="0" cellpadding="3" cellspacing="0">
          <form method='post' id="form1" action="__URL__/changedataSave" >
          <tr>
            <td colspan="3" style="height:5px;"></td>
            </tr>
          <tr>
            <td width="25%" height="30" align="right">Recommend User：</td>
            <td width="25%"><input name="UserID2" type="text" id="UserID2" value="<?php echo ($vo['re_name']); ?>" style="background-color:#ddd;" readonly="readonly" class="ipt" /></td>
            <td width="50%">&nbsp;</td>
            </tr>
        <tr>
        <td height="30" align="right">Account：</td>
          <td><input name="UserID" type="text" id="UserID" value="<?php echo ($vo['user_id']); ?>" style="background-color:#ddd;" readonly="readonly" class="ipt"/></td>
          <td>&nbsp;</td>
        </tr>
          <tr>
            <td height="30" colspan="3" style="height:5px;"><hr></td>
            </tr>
          <tr >
            <td height="30" align="right">Bank Name：</td>
<!--         <td><select name="BankName" id="BankName"> -->
<!--                   <?php if(is_array($bank)): $i = 0; $__LIST__ = $bank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?>-->
<!--                      <?php if(($bank[$key]) == $b_bank['bank_name']): ?>-->
<!--                        <option value="<?php echo ($bank[$key]); ?>" selected="selected"><?php echo ($bank[$key]); ?></option> -->
<!--                      <?php else: ?> -->
<!--                        <option value="<?php echo ($bank[$key]); ?>"><?php echo ($bank[$key]); ?></option> -->
<!--<?php endif; ?> -->
<!--<?php endforeach; endif; else: echo "" ;endif; ?> -->
<!--                 </select> -->
<!--             </td> -->
<td><input name="BankName" type="text" class="ipt"
										id="UserTel" onKeyUp="javascript:Null_Full(this.name)"
										value="<?php echo ($b_bank['bank_name']); ?>" /></td>
            <td>&nbsp;</td>
          </tr>
          <tr >
            <td height="30" align="right"><span id="bank_id">Bank Number</span>：</td>
            <td><input name="BankCard" type="text" id="BankCard" value="<?php echo ($vo['bank_card']); ?>" class="ipt" maxlength="19"/></td>
            <td></td>
            </tr>
          <tr>
            <td height="30" align="right">Name：</td>
            <td><input name="UserName" type="text" id="UserName" value="<?php echo ($vo['user_name']); ?>" style="background-color:#ddd;" class="ipt" readonly/></td>
            <td></td>
            </tr>
<!--           <tr> -->
<!--             <td height="30" align="right">开户省份：</td> -->
<!--             <td><input name="BankProvince" id="BankProvince" type="text" value="<?php echo ($vo['bank_province']); ?>" class="ipt" /></td> -->
<!--             <td></td> -->
<!--           </tr> -->
<!--           <tr > -->
<!--             <td height="30" align="right">开户城市：</td> -->
<!--             <td><input name="BankCity" id="BankCity" type="text" value="<?php echo ($vo['bank_city']); ?>" class="ipt" /></td> -->
<!--             <td></td> -->
<!--           </tr> -->
<!--           <tr> -->
<!--             <td height="30" align="right">详细开户地址：</td> -->
<!--             <td><input name="BankAddress" type="text" id="BankAddress" value="<?php echo ($vo['bank_address']); ?>" class="ipt" /></td> -->
<!--             <td></td> -->
<!--             </tr> -->
          <tr>
            <td height="30" colspan="3" style="height:5px;"><hr></td>
            </tr>
          <tr>
            <td height="30" align="right">ID Card：</td>
            <td><input name="UserCode" type="text" id="UserCode" value="<?php echo ($vo['user_code']); ?>" style="background-color:#ddd;" class="ipt" readonly/></td>
            <td></td>
            </tr>
          <tr>
            <td height="30" align="right">Tel：</td>
            <td><input name="UserTel" type="text" id="UserTel" value="<?php echo ($vo['user_tel']); ?>" class="ipt" onkeyup="javascript:Null_Full(this.name)" onfocus="notice('7','')"  onblur="notice('7','none')" /></td>
            <td><div id="UserTel1" class="info"><div id="7" class="focus_r" style="display:none;"><div class="msg_tip">Please input the tel。</div></div></div></td>
            </tr>
            <tr>
            <td height="30" align="right">Wechat：</td>
            <td><input name="qq" type="text" id="qq" value="<?php echo ($vo['qq']); ?>" class="ipt" onkeyup="javascript:Null_Full(this.name)" onfocus="notice('8','')"  onblur="notice('8','none')" /></td>
            <td><div id="qq1" class="info"><div id="8" class="focus_r" style="display:none;"><div class="msg_tip">Please input the wechat。</div></div></div></td>
            </tr>
          <tr>
            <td height="30" align="right">Register Date：</td>
            <td><?php if(isset($vo['rdt'])): echo (date('Y-m-d H:i:s',$vo['rdt'])); ?>
                  <?php else: ?>
              none<?php endif; ?></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="right">Open Date：</td>
            <td>
            <?php if(($vo['is_pay']) == "0"): ?>UnOpen
            <?php else: ?>
            <?php echo (date('Y-m-d H:i:s',$vo['pdt'])); endif; ?></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="25" colspan="2" align="center">
            <input type="hidden" name="ID" value="<?php echo ($vo['id']); ?>" >
            <input type="submit" value="Modify" class="button_text">&nbsp;&nbsp; 
            <input name="reset" type="reset" class="button_text" value="Reset"></td>
          </tr>
          </form>
        </table>
</div>
</body>
</html>
<script>
var i=document.getElementById("BankName").selectedIndex;
function setDefault() {
    document.getElementById("BankName").selectedIndex=i;
}
</script>
<script>
function addNetImg(){
	var str = document.getElementById('image2').value;
	document.getElementById('image').value = str;
	document.getElementById('imageShow').src = str;
	window.frames["frmPic"].document.getElementById('crop-preview-100').src=str;
}
function changeType(type){
	
	switch(type){
		case 1:
			document.getElementById('addImageURL').style.display='none';
			document.getElementById('uploadImg').style.display='block';
			window.frames["frmPic"].document.getElementById('selectImg').style.display='block';
			window.frames["frmPic"].document.getElementById('saveImg').style.display='block';
			window.frames["frmPic"].document.getElementById('cancelImg').style.display='block';
			break;
		case 2:
			document.getElementById('addImageURL').style.display='block';
			window.frames["frmPic"].document.getElementById('selectImg').style.display='none';
			window.frames["frmPic"].document.getElementById('saveImg').style.display='none';
			window.frames["frmPic"].document.getElementById('cancelImg').style.display='none';
			break;
		default:
	}
}

</script>