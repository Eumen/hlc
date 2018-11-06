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
<script type="text/javascript" src="__PUBLIC__/Js/juyu.js"></script>
<script language="javascript">
function yhServer(Ful,lx){
  var str = $F(Ful).replace(/^\s+|\s+$/g,"");
  var re = /[^(\w){6,20}$]/g;
  str = str.replace(re,"");
  document.getElementById(Ful).value = str;
  if (str != ""){
    if(lx==0){ThinkAjax.send('__APP__/Fck/check_shopid/','ajax=1&shopid='+str,'',Ful+'1');}
    if(lx==1){ThinkAjax.send('__APP__/Fck/check_reid/','ajax=1&reid='+str,'',Ful+'1');}
    if(lx==2){ThinkAjax.send('__APP__/Fck/check_fid/','ajax=1&fid='+str,'',Ful+'1');}
    if(lx==3){ThinkAjax.send('__APP__/Fck/check_userid/','ajax=1&userid='+str,'',Ful+'1');}
  }
}
function guolv(Ful){
  var str = $F(Ful).replace(/^\s+|\s+$/g,"");
  var re = /[^(\w){6,20}$]/g;
  str = str.replace(re,"");
  document.getElementById(Ful).value = str;
}
function ajaxagent(){
  var divp = document.getElementById("showagent");
  if(divp.style.display=="none"){
    var xmlHttp;
    try{
      //FF Opear 8.0+ Safair
      xmlHttp=new XMLHttpRequest();
    }
    catch(e){
      try{
        xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch(e){
        alert("您的浏览器不支持AJAX");
        return false;    
      }
    }
    xmlHttp.onreadystatechange=function(){
      if(xmlHttp.readyState==4){
        var valuet = xmlHttp.responseText;
        document.getElementById("agentall").innerHTML=valuet;
        window.parent.turnHeight('main');
      }
    }
    var url="__URL__/find_agent/";
    url+="/sid/"+Math.random();
    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);
    divp.style.display="block";
  }else{
    divp.style.display="none";
  }
}
</script>

<style>
#agentall{ width:100%;}
#agentall li{ width:230px; float:left; padding:5px; line-height:22px;}
</style>
<div class="ncenter_box">
<div class="accounttitle"><h4>注册会员</h4></div>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tab1">
  <tr>
    <td>
    <form method='post' id="form1" name="form1" action="__URL__/usersConfirm"/>
    <table width="100%" border="0" cellpadding="3" cellspacing="0" class="tab4">
      <tr>
        <td width="40%" align="right"><span class="zc_hong">*</span> 推荐人：</td>
        <td width="40%"><input name="RID" id="RID" type="text"  class="ipt" onKeyUp="guolv(this.name)" onFocus="notice('1','')" onBlur="javascript:yhServer(this.name,'1');notice('1','none')" /></td>
        <td width="60%"><div id="RID1" class="info"><div id="1" class="focus_r" style="display:none;"><div class="msg_tip">请填写推荐人(默认100000)。</div></div></div> </td>
      </tr>
      <tr>
        <td align="right"><span class="zc_hong">*</span> 会员登录名：</td>
        <td><input name="UserID" type="text" class="ipt" id="UserID" onFocus="notice('14','')"  onblur="notice('14','none')"  onKeyUp="javascript:Null_Full(this.name)" maxlength="10"/></td>
        <td><div id="UserID1" class="info"><div id="14" class="focus_r" style="display:none;"><div class="msg_tip">请输入您的会员登录名。</div></div></div></td>
      </tr>
      <tr>
        <td align="right"><span class="zc_hong">*</span> 姓名：</td>
        <td><input name="UserName" type="text" class="ipt"  id="UserName" onFocus="notice('9','')"  onblur="notice('9','none')" onKeyUp="javascript:Null_Full(this.name)" value="" maxlength="10" /></td>
        <td><div id="UserName1" class="info"><div id="9" class="focus_r" style="display:none;"><div class="msg_tip">请输入您的姓名。</div></div></div></td>
      </tr>
      <tr>
        <td align="right"><span class="zc_hong">*</span>身份证号：</td>
        <td><input name="UserCode" type="text" class="ipt" id="UserCode" onFocus="notice('11','')"  onblur="notice('11','none')" onKeyUp="javascript:Null_Full(this.name)" value="" maxlength="18" /></td>
        <td><div id="UserCode1" class="info"><div id="11" class="focus_r" style="display:none;"><div class="msg_tip">请输入您的身份证号。</div></div></div></td>
      </tr>
      <tr>
        <td align="right"><span class="zc_hong">*</span>联系电话：</td>
        <td><input name="UserTel" type="text" class="ipt"  id="UserTel" onFocus="notice('13','')"  onblur="notice('13','none')" onKeyUp="javascript:Null_Full(this.name)" value=""/></td>
        <td><div id="UserTel1" class="info"><div id="13" class="focus_r" style="display:none;"><div class="msg_tip">请输入您的联系电话。</div></div></div></td>
      </tr>
      <tr>
        <td align="right"><span class="zc_hong">*</span>微信：</td>
        <td><input name="qq" type="text" class="ipt"  id="qq" onFocus="notice('15','')"  onblur="notice('15','none')" onKeyUp="javascript:Null_Full(this.name)" value=""/></td>
        <td><div id="qq1" class="info"><div id="15" class="focus_r" style="display:none;"><div class="msg_tip">请输入您的微信。</div></div></div></td>
      </tr>
      <tr>
        <td colspan="3" style="height:5px;"><hr></td>
      </tr>
      <tr>
        <td align="right"><span class="zc_hong">*</span> 密码：</td>
        <td><input name="Password" type="password" class="ipt"  id="Password" onFocus="notice('4','')"  onblur="javascript:yhPass(this.name);notice('4','none');" value="1"/></td>
        <td><div id="Password1" class="info"><div id="4" class="focus_r" style="display:none;"><div class="msg_tip">请使用字母加数字或符号的组合密码。</div></div></div></td>
      </tr>
      <tr>
        <td align="right"><span class="zc_hong">*</span> 确认密码：</td>
        <td><input name="rePassword" type="password" class="ipt"  id="rePassword" onFocus="notice('5','')"  onblur="javascript:yhrePass(this.name,'Password');notice('5','none')" value="1"/></td>
        <td><div id="rePassword1" class="info"><div id="5" class="focus_r" style="display:none;"><div class="msg_tip">确认一级密码。</div></div></div></td>
      </tr>
      <tr>
        <td colspan="3" style="height:5px;"><hr></td>
      </tr>
      <tr>
        <td align="right"><span class="zc_hong">*</span> 开户银行：</td>
        <td><input name="BankName" type="text" class="ipt"
										id="UserTel" onKeyUp="javascript:Null_Full(this.name)"
										value="" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="right"><span class="zc_hong">*</span> <span id="bank_id"><?php if(($bank[0]) == "财付通"): ?>财付通号<?php else: ?>银行卡号<?php endif; ?></span>：</td>
        <td><input name="BankCard" type="text" class="ipt" id="BankCard" onFocus="notice('8','')"  onblur="notice('8','none')" onKeyUp="javascript:Null_Full(this.name)" value="" maxlength="19" /></td>
        <td><div id="BankCard1" class="info"><div id="8" class="focus_r" style="display:none;"><div class="msg_tip">请输入您的银行卡号。</div></div></div></td>
      </tr>
<!--       <tr > -->
<!--       <td align="right">开户省份：</td> -->
<!--             <td><select name="BankProvince" id="s1" > -->
<!--                 <option></option> -->
<!--               </select></td> -->
<!--             <td>&nbsp;</td> -->
<!--       </tr> -->
<!--       <tr > -->
<!--        <td align="right">开户城市：</td> -->
<!--             <td><select name="BankCity" id="s2" > -->
<!--                 <option></option> -->
<!--               </select></td> -->
<!--             <td>&nbsp;</td> -->
<!--       </tr> -->
<!--       <tr> -->
<!--         <td align="right">详细开户地址：</td> -->
<!--         <td><input name="BankAddress" type="text" class="ipt" id="BankAddress" value="" /></td> -->
<!--         <td><div id="BankAddress1" class="info"><div id="10" class="focus_r" style="display:none;"><div class="msg_tip">请输入您的详细开户地址。</div></div></div></td> -->
<!--       </tr> -->
<!--        <script language = JavaScript>
//             var s=["s1","s2"];
//             var opt0 = ["请选择","请选择"];
//             function setup()
//             {
//                 for(i=0;i<s.length-1;i++)
//                 document.getElementById(s[i]).onchange=new Function("change("+(i+1)+")");
//                 change(0);
//             }
//             setup();
           </script> -->
       <tr>
            <td align="right">申请级别：</td>
            <td colspan="2">
            <?php if(is_array($s2)): $i = 0; $__LIST__ = $s2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$svo): $mod = ($i % 2 );++$i; if(($key) == "0"): ?><input name="u_level" type="radio" id="radio" value="<?php echo ($key); ?>" checked="checked"  />
            <strong><span class="STYLE3"><?php echo ($s9[$key]); ?> </span></strong>
            <?php else: ?>
            <input name="u_level" type="radio" id="radio" value="<?php echo ($key); ?>"/>
            <strong><span class="STYLE3"><?php echo ($s9[$key]); ?> </span></strong><?php endif; endforeach; endif; else: echo "" ;endif; ?>

            </td>
      </tr>
    <tr>
        <td align="right"><span class="zc_hong">*</span>单数：</td>
        <td><input name="f4" type="text"  id="f4" class="ipt"  value="1" /></td>
        
      </tr>
      <tr>
        <td align="right"><span class="zc_hong">*</span>我已阅读</td>
        <td><a href="__URL__/rule.html">【消费协议】</a>全部内容&nbsp;<input name="ck1" type="checkbox"  id="ck1" class="ipt"/></td>
        
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td><span class="center">
          	<input name="submit1" id="Access" type="submit" class="button_text" value="注册" />
			&nbsp;&nbsp;
			<input name="重置" type="reset" class="button_text" value="重置" id="重置" />
        	</span></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    </form>
    </td>
  </tr>
</table>
</div>
</body>
</html>