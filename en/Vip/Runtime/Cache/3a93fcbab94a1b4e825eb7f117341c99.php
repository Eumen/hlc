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

<style>
.treep1{display:;}
.treep2{display:none;}
.sub_bav td {
    border: 0px solid #D0D0D0 !important;
    border-collapse: collapse;
    padding: 0px;
}
</style>

<script type="text/javascript" src="__PUBLIC__/Js/tree.js"></script>
<div class="ncenter_box">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <form method='post' action="__URL__/TreeAjax/">
  <tr>
    <td height="50">&nbsp;&nbsp;Account：
    <input type="text" name="UserID" title="Account"  >
    <input type="submit" name="Submit" value="Query" class="btn1"/>
    </td>
  </tr>
  </form>
  <tr>
    <td><?php echo ($myStr); ?></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="<?php echo ($myTabN); ?>">
  <tr>
    <td>
    <?php if(is_array($z_tree)): $i = 0; $__LIST__ = $z_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$z_tt): $mod = ($i % 2 );++$i;?><div><?php echo ($z_tt[0]); ?></div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="<?php echo ($z_tt[1]); ?>" class="treep2">
      <tr>
        <td id="<?php echo ($z_tt[1]); ?>_tree"><?php echo ($z_tt[2]); ?><img src="__PUBLIC__/Images/loading2.gif" align="absmiddle"></td>
      </tr>
    </table><?php endforeach; endif; else: echo "" ;endif; ?>
    </td>
  </tr>
</table>
<!-- <table width="90%" border="0" cellspacing="0" cellpadding="0"> -->
<!--   <tr> -->
<!--     <td height="30">&nbsp;&nbsp; -->
<!--     <?php if(is_array($s9)): $i = 0; $__LIST__ = $s9;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$svo): $mod = ($i % 2 );++$i;?>-->
<!--     <strong><span class="STYLE3"><?php echo ($s10[$key]); ?>(<?php echo ($s9[$key]); ?>)</span></strong>&nbsp;&nbsp; -->
<!--<?php endforeach; endif; else: echo "" ;endif; ?></td> -->
<!--   </tr> -->
<!-- </table> -->
<!--<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="30">说明：<img src="__PUBLIC__/Images/tree/center.gif" width="18" height="18" />报单中心<img src="__PUBLIC__/Images/tree/Official.gif" width="18" height="18" />已开通 <img src="__PUBLIC__/Images/tree/trial.gif" width="18" height="18" />未开通</td>
  </tr>
</table>-->
</div>
</body>
</html>
<script>
function openmm(oid,tid,mid,numm,ppath){
	var tobj = document.getElementById(oid);
	var mobj = document.getElementById(tid);
	var cmid = "o"+tid;
	var cobj = document.getElementById(cmid);
	var coimg = cobj.src;
	if(tobj.className=="treep2"){
		tobj.className="treep1";
		var opppid = oid+"_tree";
		ajaxChech(opppid,mid,numm,ppath)
	}else{
		tobj.className="treep2";
	}
	cobj.src = mobj.src;
	mobj.src = coimg;
	

}
function ajaxChech(vid,aid,nnn,pp){
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
			document.getElementById(vid).innerHTML=valuet;
		}
	}
	var url="__URL__/ajax_tree_m/";
	url+="/reid/"+aid+"/nn/"+nnn+"/pp/"+pp;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}
</script>