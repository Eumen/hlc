<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($System_namex); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/resource/css/bootstrap.min.css" title="default">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/resource/css/style.css" title="default">
</head>
<script src="__PUBLIC__/resource/js/jquery-1.12.4.min.js"></script>
<script src="__PUBLIC__/resource/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/Js/Jquery/jquery.bootstrap.newsbox.min.js"
	type="text/javascript"></script>
<script type="text/javascript" src="__PUBLIC__/Js/Jquery/jquery.qrcode.min.js"></script>  
<script type="text/javascript">
	window.onload =function(){
	//默认使用Canvas生成，并显示到图片   
	 var qrcode= $('#qrDiv').qrcode("http://<?php echo ($server); ?>/Reg/us_reg/rid/<?php echo ($fck_rs['id']); ?>/").hide();   
	 var canvas=qrcode.find('canvas').get(0);  
	 $('#imagQrDiv').attr('src',canvas.toDataURL('image/png')) ;
	 }
	$(function() {
		$(".demo2").bootstrapNews({
			newsPerPage : 1,
			autoplay : true,
			pauseOnHover : true,
			navigation : false,
			direction : 'down',
			newsTickerInterval : 2500,
			onToDo : function() {
			}
		});
	});
</script>
<style>
-webkit-touch-callout:default;
.center {
  width: 100%px;
  height: 30px;
  border: 1px solid #ccc;
  margin: 20px auto;

  display: -webkit-box;
  -webkit-box-orient: horizontal;
  -webkit-box-pack: center;
  -webkit-box-align: center;
  
  display: -moz-box;
  -moz-box-orient: horizontal;
  -moz-box-pack: center;
  -moz-box-align: center;
  
  display: -o-box;
  -o-box-orient: horizontal;
  -o-box-pack: center;
  -o-box-align: center;
  
  display: -ms-box;
  -ms-box-orient: horizontal;
  -ms-box-pack: center;
  -ms-box-align: center;
  
  display: box;
  box-orient: horizontal;
  box-pack: center;
  box-align: center;
}
  
.modal-open {  
  overflow-y: auto;  
} 

.clickable {
    cursor: pointer;
}
</style>
</head>
<body background="__PUBLIC__/Css/login/picture/banner_1.jpg">
<div class = "container" style="background-color: #f0f3ef;height:100%">
<div class="row">
	<div class="col-xs-12 navbar-fixed-up" style="background-color: #41b9e7;">
    	<div class="span3 float-left" style="color: #ffffff; padding-top: 2px; font-size: 16px; height:inherit;">
    		<a class="glyphicon glyphicon-home" href="__APP__/"
			style="color: rgb(255, 255, 255); font-size: 16px;"></a>Management System
    	</div>
    	<div class="span3 float-left" style="color: #ffffff; padding-top: 2px; font-size: 16px; height:inherit;">
    	&nbsp;&nbsp;&nbsp;&nbsp;
    		<a class="glyphicon glyphicon-envelope" href="__APP__/Msg/inmsg/"
			style="color: rgb(255, 255, 255); font-size: 20px;"><?php if(($msg_count) > "0"): ?><font class="label label-default label-danger"><?php echo ($msg_count); ?></font><?php endif; ?>
			</a>
    	</div>
    	<div class="pull-right" >
	        <a href="__APP__/Public/LogOut/" class="glyphicon glyphicon-log-out"
	        	style="color: rgb(255, 255, 255); font-size: 16px;">Exit</a>
    	</div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-4 padding-one">
            <div class="row" style="padding-top: 5%;padding-left: 5%">
                <div class="text-primary">
                    <img class="img-circle img-responsive" src="__PUBLIC__/Images/114.png" /></div>
                    
            </div>
        </div>
        <div class="col-xs-5">
            <div class="row">
                <div class="form-group-sm" style="width: 100%;height: 50%">
                    <label class="text-danger">Account：</label><label class="text-success"><?php echo ($_SESSION['loginUseracc']); ?></label>
                </div>
                <div class="form-group-sm" style="width: 100%;height: 50%">
                    <label class="text-danger">UserName：</label><label class="text-success"><?php echo ($_SESSION['loginUserName']); ?></label>
                </div>
                <div class="form-group-sm" style="width: 100%;height: 50%">
                    <label class="text-danger">Invest Amount：</label><label class="text-success"><?php echo ($fck_rs['cpzj']); ?></label>
                </div>
                <div class="form-group-sm" style="width: 100%;height: 50%">
                    <label class="text-danger">ReInvest Count：</label><label class="text-success"><?php echo ($fck_rs['is_cc']); ?></label>
                </div>
                <div class="form-group-sm" style="width: 100%;height: 50%">
                    <label class="text-danger">Register Time：</label><label class="text-success"><?php echo (date('Y-m-d',$fck_rs['rdt'])); ?></label>
                </div>
            </div>
        </div>
        <div class="col-xs-3 padding-one">
            <div class="row text-center clickable" style="padding-top: 30%" data-toggle="modal" data-target="#myModal">
                <div class="text-primary text-center" width="70%" >
                    <img src="__PUBLIC__/resource/image/qrcode.png" class="img-responsive"></div>
                <div class="text-primary text-left" width="70%">Click get the QR code</div>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">My QR code</h4>
		        </div>
		        <div class="modal-body">
					<div id="qrDiv"></div>  
				    <img id='imagQrDiv'/>  
				</div>
		      </div>
		      </div>
		    </div>
    </div>
    <div class="col-xs-12 line-style margin-top">
    </div>
    <div class="col-md-12 col-xs-12 col-sm-12">
        <div class="col-md-4 col-xs-6 col-xs-6" style="padding-left: 0">
            <div class="text-default text-left text-nowrap">Cost Point:<font color="red"><?php echo ($fck_rs['agent_use']); ?></font></div>
        </div>
        <div class="col-md-4 col-xs-6 col-xs-6" style="padding-left: 0">
            <div class="text-default text-nowrap">Lock Amount：<font color="red"><?php echo ($lockAmount); ?></font></div>
        </div>
        <div class="col-md-4 col-xs-6 col-xs-6" style="padding-left: 0">
            <div class="text-default text-nowrap">Recommend Num：<font color="red"><?php echo ($fck_rs['re_nums']); ?></font></div>
        </div>
        <div class="col-md-4 col-xs-6 col-xs-6" style="padding-left: 0">
            <div class="text-default text-nowrap">Team Num：<font color="red"><?php echo ($all_nn); ?></font></div>
        </div>
        <div class="col-md-4 col-xs-6 col-xs-6" style="padding-left: 0">
            <div class="text-default text-nowrap">Team Performance：<font color="red"><?php echo ($all_remoney); ?></font></div>
        </div>
        <div class="col-md-4 col-xs-6 col-xs-6" style="padding-left: 0">
            <div class="text-default text-nowrap">Price：<font color="red"><?php echo ($price); ?></font></div>
        </div>
    </div>
    <div class="col-xs-12 line-style margin-top">
    </div>
    <div class="col-xs-12 bg-info">
        <ul class="nav nav-tabs">
<!--             <li class="nav-item"> -->
<!--                 <a class="nav-link active" href="__APP__/Transfer/cody/c_id/1">转账</a> -->
<!--             </li> -->
			<li class="nav-item">
                <a class="nav-link" href="__APP__/Recharge/currencyRecharge">Deposit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="__APP__/Currency/frontCurrency">Withdrawal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="__APP__/Bonus/financeTable">Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="__APP__/Agent/agents1">ReInvestment</a>
            </li>
        </ul>
    </div>
    <div class="col-xs-12 bg-info">
    </div>
    <div class="col-xs-12 margin-top">
				<div class="panel-body">
					<div class="row">
						<ul class='demo2'>
	                     <?php foreach ($_SESSION['news'] as $key => $value){ ?>
	                     	<li class='news-item'>
	                   		<?php printf($value["title"])?>
	                   		<a href='__APP__/News/News'>More...</a></li>
	 					 <?php }; ?>
	 					 </ul>
					</div>
				</div>
    </div>
    <div class="col-xs-12 line-style">
    </div>
    <div class="col-xs-12 margin-top">
        <div class="col-xs-3 text-center" style="cursor: pointer" onclick="javascript:window.location.href='__APP__/Index/profileIndex/'">
            <div>
                <img  class="img-responsive center-img" src="__PUBLIC__/resource/image/grzx.png"/>
            </div>
            <div>
                <label>Profile</>
            </div>
        </div>
        <div class="col-xs-3 text-center" style="cursor: pointer" onclick="javascript:window.location.href='__APP__/Index/marketIndex/'">
            <div>
                <img class="img-responsive center-img" src="__PUBLIC__/resource/image/scgl.png"/>
            </div>
            <div>
                <p>Market</p>
            </div>
        </div>
        <div class="col-xs-3 text-center" style="cursor: pointer" onclick="javascript:window.location.href='__APP__/Index/treasureIndex/'">
            <div>
                <img class="img-responsive center-img" src="__PUBLIC__/resource/image/cphg.png"/>
            </div>
            <div>
                <p>Financial</p>
            </div>
        </div>
        <div class="col-xs-3 text-center" style="cursor: pointer" onclick="javascript:window.location.href='__APP__/Index/newsIndex/'">
            <div>
                <img class="img-responsive center-img" src="__PUBLIC__/resource/image/zxgg.png"/>
            </div>
            <div>
                <p>Message</p>
            </div>
        </div>
    </div>
    <div class="col-xs-12 margin-top">
        <?php if( $fck_rs['id'] == "1"): ?>
        <div class="col-xs-3 text-center" style="cursor: pointer" onclick="javascript:window.location.href='__APP__/Index/agentIndex/'">
            <div>
                <img class="img-responsive center-img" src="__PUBLIC__/resource/image/fwwd.png"/>
            </div>
            <div>
                <p>Service</p>
            </div>
        </div>
        <div class="col-xs-3 text-center" style="cursor: pointer" onclick="javascript:window.location.href='__APP__/Index/backmanagerIndex/'">
            <div>
                <img class="img-responsive center-img" src="__PUBLIC__/resource/image/cpsc.png"/>
            </div>
            <div>
                <p>Backend</p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
</div>
</body>
</html>