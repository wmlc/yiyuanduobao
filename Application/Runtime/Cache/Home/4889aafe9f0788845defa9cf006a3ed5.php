<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>支付订单</title>
	<meta name="description" content="1元夺宝">
    <meta name="keywords" content="1元夺宝">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
	<meta content="telephone=no" name="format-detection">
	<link href="../../../Public/public1/index/css/pay_pay/common.css" rel="stylesheet">
	<link href="../../../Public/public1/index/css/pay_pay/pay.css" rel="stylesheet">
</head>
<body>
    <div class="m-pay-order">
        <div data-pro="list">
        	<div id="pro-view-1">
        		<div data-pro="entry" class="m-pay-order-list">
        			<div id="pro-view-2" class="m-pay-order-list-item">
        				<span class="m-pay-order-list-item-name"><?php echo ($goods["name"]); ?></span>
        				<span class="m-pay-order-list-item-num">
        					<b class="txt-red"><?php echo ($goods["buy_number"]); ?></b>人次
        				</span>
        			</div>
        		</div>
        		<div class="m-pay-order-total">商品合计：<b class="txt-red"><?php echo ($goods["total_money"]); ?>元</b></div>
        	</div>
        </div>
        
        <div data-pro="options" class="m-pay-order-options">
        	<div id="pro-view-6" class="w-option w-option-unfold">
        		<div class="w-bar" data-pro="groupTitle">
        			<span id="pro-view-24">支付方式</span>
        		</div>
        		<div style="" class="w-bar-content" data-pro="groupItems">
        			<span id="pro-view-7" class="pro-radioGroup">
        				<div id="pro-view-8" class="w-radioBar w-bar w-radioBar-checked">
        					<b class="w-radio"></b>微信支付
        					<div class="w-bar-ext">
        						<input checked="checked" name="pro-radio34" value="9999" type="radio">
        					</div>
        				</div>
        				
        		</div>
        	</div>
        </div>

        <div data-pro="submit" class="m-pay-order-submit"><a href="<?php echo u('Pay/go_pay',array('id' => $goods['id']));?>"><button id="pro-view-20" class="w-button w-button-main w-button-l">确认支付</button></a></div>
    </div>



<div id="pro-view-0" class="m-simpleHeader"><a href="#"  onClick="javascript :history.back(-1);"  data-pro="back" data-back="true" class="m-simpleHeader-back"><i class="ico ico-back"></i></a><h1>支付订单</h1></div></body></html>