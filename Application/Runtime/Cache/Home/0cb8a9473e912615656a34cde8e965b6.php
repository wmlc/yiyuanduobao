<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>订单</title>
	<meta name="description" content="1元夺宝">
    <meta name="keywords" content="1元夺宝">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
	<meta content="telephone=no" name="format-detection">
	<link href="../../../../../Public/public1/index/css/pay_join/common.css" rel="stylesheet">
	<link href="../../../../../Public/public1/index/css/pay_join/cart.css" rel="stylesheet">
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
	<script>
		$(function(){
			var t = $("#text_box");
			$("#add").click(function(){		
				t.val(parseInt(t.val())+1)
				if(parseInt(t.val())><?php echo ($goods["remainder"]); ?>){ 
					t.val(<?php echo ($goods["remainder"]); ?>); 
				} 
				setTotal();
			})
			$("#min").click(function(){
				t.val(parseInt(t.val())-1)
				if(parseInt(t.val())<1){ 
					t.val(1); 
				} 
				setTotal();
			})
			function setTotal(){
				$("#total").html((parseInt(t.val())*<?php echo ($goods["unit_price"]); ?>).toFixed(2));
			}
			setTotal();
		})
	</script>

</head>
<body>

<div id="pro-view-0" class="m-simpleHeader">
	<a href="#"  onClick="javascript :history.back(-1);"  data-pro="back" data-back="true" class="m-simpleHeader-back">
		<i class="ico ico-back"></i>
	</a>
	<h1>清单</h1>
</div>
<form name="edit" action="<?php echo u("Pay/pay");?>" method="post" enctype="multipart/form-data">
<div id="pro-view-3" class="m-simpleFooter">
	<div data-pro="text" class="m-simpleFooter-text">
		<div id="pro-view-4">共参与1件商品，总计：<em class="txt-red" id="total"></em><em class="txt-red">元</em></div>
	</div>
	<div data-pro="ext" class="m-simpleFooter-ext">
	<button class="w-button w-button-main" type="submit" id="pro-view-2">提交订单</button>
	</div>
</div>
<div id="pro-view-5" class="m-cart">
	<div id="pro-view-6" class="item">
		<div class="pic">
				<img src="<?php echo ($goods["image"]); ?>" height="70px" alt="">
		</div>
		<div class="text">
			<h1 class="title">
				<?php echo ($goods["name"]); ?>
			</h1>
			<div>总需 <?php echo ($goods["number"]); ?> 人次，剩余 <em class="remain"><?php echo ($goods["remainder"]); ?></em> 人次</div>
		<div>
			参与人次 
			<div id="pro-view-7" class="w-number">
				<input class="w-number-input" name="number" readonly= "true" data-pro="input" id="text_box" value="1" pattern="[0-9]*">
				<a class="w-number-btn w-number-btn-plus" data-pro="plus" id="add">+</a>
				<a class="w-number-btn w-number-btn-minus" data-pro="minus" id="min">-</a>
			</div>
			<input type="hidden" name="id" value="<?php echo ($goods["id"]); ?>" />
		</div>
	</div>
</div>
</form>
</div>
</body>
</html>