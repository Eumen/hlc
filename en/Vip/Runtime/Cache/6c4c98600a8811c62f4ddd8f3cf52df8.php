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
<table width="100%" border="0" align="center" cellpadding="0"
	cellspacing="0" style="margin: 0px 0px;">
	<tr>
		<td>
			<div class="ncenter_box">
				<div class="accounttitle">
					<h1>Register User</h1>
				</div>
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="tab1">
					<tr>
						<td>
							<form method='post' id="form1" name="form1" action="__URL__/us_regAC" />
							<table width="100%" border="0" cellpadding="1" cellspacing="0" class="tab4">
								<tr>
									<td width="15%" align="right"><span class="zc_hong">*</span>
										Recommend UserId：</td>
									<td width="20%"><input name="RID" id="RID" type="text"
										value="<?php echo ($rs['user_id']); ?>" class="ipt"
										onKeyUp="guolv(this.name)"
										onBlur="javascript:yhServer(this.name,'1');" /><span class="zc_hong">please input ‘100000’ if no recomend user</span></td>
								</tr>
								<tr>
									<td align="right"><span class="zc_hong">*</span>
										Login Name：</td>
									<td><input name="UserID" type="text" class="ipt"
										id="UserID" onKeyUp="javascript:Null_Full(this.name)"
										maxlength="10" /></td>
								</tr>
								<tr>
									<td align="right"><span class="zc_hong">*</span> name：</td>
									<td><input name="UserName" type="text" class="ipt"
										id="UserName" onKeyUp="javascript:Null_Full(this.name)"
										value="" maxlength="10" /></td>
								</tr>
								<tr>
									<td align="right"><span class="zc_hong">*</span>tel：</td>
									<td><input name="UserTel" type="text" class="ipt"
										id="UserTel" onKeyUp="javascript:Null_Full(this.name)"
										value="" /></td>
								</tr>
								<tr>
									<td align="right"><span class="zc_hong">*</span>wechat：</td>
									<td><input name="qq" type="text" class="ipt"
										id="qq" onKeyUp="javascript:Null_Full(this.name)"
										value="" /></td>
								</tr>
								<tr>
									<td colspan="2" style="height: 1px;"><hr></td>
								</tr>
								<tr>
									<td align="right"><span class="zc_hong">*</span> password：</td>
									<td><input name="Password" type="password" class="ipt"
										id="Password" onblur="yhPass(this.name);" value="" /></td>
								</tr>
								<tr>
									<td align="right"><span class="zc_hong">*</span> confirm password：</td>
									<td><input name="rePassword" type="password" class="ipt"
										id="rePassword" onblur="yhrePass(this.name,'Password');"
										value="" /></td>
								</tr>
								<tr>
								<td colspan="2" style="height: 1px;"><hr></td>
								</tr>
								<tr>
									<td align="right"><span class="zc_hong">*</span>Bank Name：</td>
									<td><input name="BankName" type="text" class="ipt"
										id="UserTel" onKeyUp="javascript:Null_Full(this.name)"
										value="" /></td>
								</tr>
								<tr>
									<td align="right"><span class="zc_hong">*</span> <span
										id="bank_id"><?php if(($bank[0]) == ""): ?>帐号<?php else: ?>Bank Number<?php endif; ?></span>：</td>
									<td><input name="BankCard" type="text" class="ipt"
										id="BankCard" onKeyUp="javascript:Null_Full(this.name)"
										value="" maxlength="19" /></td>
								</tr>
<!-- 								<tr> -->
<!-- 									<td align="right">省份：</td> -->
<!-- 									<td><select name="BankProvince" id="s1"> -->
<!-- 											<option></option> -->
<!-- 									</select></td> -->
<!-- 								</tr> -->
<!-- 								<tr> -->
<!-- 									<td align="right">城市：</td> -->
<!-- 									<td><select name="BankCity" id="s2"> -->
<!-- 											<option></option> -->
<!-- 									</select></td> -->
<!-- 								</tr> -->
<!-- 								<tr> -->
<!-- 									<td align="right">详细开户地址：</td> -->
<!-- 									<td><input name="BankAddress" type="text" class="ipt" -->
<!-- 										id="BankAddress" value="" /></td> -->
<!-- 								</tr> -->
<!-- 								<script language=JavaScript>
// 									var s = [ "s1", "s2" ];
// 									var opt0 = [ "请选择", "请选择" ];
// 									function setup() {
// 										for (i = 0; i < s.length - 1; i++)
// 											document.getElementById(s[i]).onchange = new Function(
// 													"change(" + (i + 1) + ")");
// 										change(0);
// 									}
// 									setup();
								</script> -->
								<tr>
									<td align="right"><span class="zc_hong">*</span>ID Card：</td>
									<td><input name="UserCode" type="text" class="ipt"
										id="UserCode" onKeyUp="javascript:Null_Full(this.name)"
										value="" maxlength="18" /></td>
								</tr>
								<tr>
									<td align="right">Level：</td>
									<td colspan="2"><?php if(is_array($s2)): $i = 0; $__LIST__ = $s2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$svo): $mod = ($i % 2 );++$i; if(($key) == "0"): ?><input name="u_level" type="radio"
											id="radio" value="<?php echo ($key); ?>" checked="checked" /> <strong><span
											class="STYLE3"><?php echo ($s9[$key]); ?> </span></strong> <?php else: ?> <input
											name="u_level" type="radio" id="radio" value="<?php echo ($key); ?>" /> <strong><span
											class="STYLE3"><?php echo ($s9[$key]); ?> </span></strong><?php endif; endforeach; endif; else: echo "" ;endif; ?></td>
								</tr>
								<tr>
									<td align="right"><span class="zc_hong">*</span>Number：</td>
									<td><input name="f4" type="text" id="f4" class="ipt"
										value="1" /></td>

								</tr>
								<tr>
							        <td align="right"><span class="zc_hong">*</span></td>
							        <td><a href="__URL__/rule.html">【Agreement】</a>&nbsp;<input name="ck1" type="checkbox"  id="ck1" class="ipt"/></td>
						       </tr>
								<tr>
								<td colspan="2" style="height: 1px;"><hr></td>
								</tr>
								<tr>
									<td align="right">&nbsp;</td>
									<td><span class="center"> <input name="submit1"
											id="Access" type="submit" class="button_text" value="Confirm" />
											&nbsp;&nbsp; <input name="Reset" type="reset"
											class="button_text" value="Reset" id="Reset" />
									</span></td>
								</tr>
							</table>
							</form>
						</td>
					</tr>
				</table>

			</div>
		</td>
	</tr>
</table>
<script language="javascript">
	function yhServer(Ful, lx) {
		var str = $F(Ful).replace(/^\s+|\s+$/g, "");
		var re = /[^(\w){6,20}$]/g;
		str = str.replace(re, "");
		document.getElementById(Ful).value = str;
		if (str != "") {
			if (lx == 0) {
				ThinkAjax.send('__APP__/Fck/check_shopid/', 'ajax=1&shopid='
						+ str, '', Ful + '1');
			}
			if (lx == 1) {
				ThinkAjax.send('__APP__/Fck/check_reid/', 'ajax=1&reid=' + str,
						'', Ful + '1');
			}
			if (lx == 2) {
				ThinkAjax.send('__APP__/Fck/check_fid/', 'ajax=1&fid=' + str,
						'', Ful + '1');
			}
			if (lx == 3) {
				ThinkAjax.send('__APP__/Fck/check_userid/', 'ajax=1&userid='
						+ str, '', Ful + '1');
			}
		}
	}
	function guolv(Ful) {
		var str = $F(Ful).replace(/^\s+|\s+$/g, "");
		var re = /[^(\w){6,20}$]/g;
		str = str.replace(re, "");
		document.getElementById(Ful).value = str;
	}
</script>
<style>
#agentall {
	width: 100%;
}

#agentall li {
	width: 230px;
	float: left;
	padding: 5px;
	line-height: 22px;
}
</style>
</body>
</html>