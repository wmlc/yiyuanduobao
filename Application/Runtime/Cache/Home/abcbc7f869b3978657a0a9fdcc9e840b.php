<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>往期揭晓</title>
	<meta name="description" content="1元夺宝">
    <meta name="keywords" content="1元夺宝">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
	<meta content="telephone=no" name="format-detection">
    <link href="../../../Public/public1/index/css/goods_past/common.css" rel="stylesheet">
    <link href="../../../Public/public1/index/css/goods_past/detail.css" rel="stylesheet">
	</head>
<body>

<div class="g-body">
	<div class="m-winRecord">
	<div class="m-simpleHeader" id="dvHeader">
	    <a href="#"  onClick="javascript :history.back(-1);" data-pro="back" data-back="true" class="m-simpleHeader-back"><i class="ico-back"></i></a>
	    <h1>往期揭晓</h1>
	</div>
	    <div class="g-wrap">
		    <div class="m-winRecord-wrap">
		    <div id="pro-view-1">
		    	<ul class="m-winRecord-list hahah" data-pro="entry">
		    	<?php if(is_array($goods_past)): foreach($goods_past as $k=>$goods): ?><li id="pro-view-2" class="w-record m-winRecord-revealed">
		    			<div class="w-record-title">
		    				<a href="<?php echo u('Goods/past_details',array('issue' => $goods['issue']));?>">期号：<?php echo ($goods["issue"]); ?> ( 揭晓时间：<?php echo ($goods["publish_time"]); ?> )</a>
		    			</div>
		    			<div class="w-record-cnt f-clear">
		    				<div class="w-record-avatar">
		    					<img  src="<?php echo ($goods["head"]); ?>" height="90" width="90">
		    				</div>
		    				<div class="w-record-detail">
		    					<p class="f-txtabb">获奖者：<?php echo ($goods["user"]); ?></p>
		    					<p>用户ID：<?php echo ($goods["user_id"]); ?> (唯一不变标识)</p>
		    					<p>幸运号码：<span class="txt-red"><?php echo ($goods["lucky_number"]); ?></span></p>
		    					<p>本期参与：<span class="txt-red"><?php echo ($goods["man_number"]); ?></span>人次</p>
		    				</div>
		    			</div>
		    		</li><?php endforeach; endif; ?>
		    	</ul>
		    </div>
	    </div>
	</div>
</div>
</body>
</html>