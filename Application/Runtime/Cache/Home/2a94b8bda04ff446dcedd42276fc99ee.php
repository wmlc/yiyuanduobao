<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo ($goods["name"]); ?></title>
	<meta name="description" content="1元夺宝">
	<meta name="keywords" content="1元,一元,1元夺宝,1元购">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
	<meta content="telephone=no" name="format-detection">
	<!-- <link href="<?php echo (CSS_URL); ?>/common.css" rel="stylesheet">
	<link href="<?php echo (CSS_URL); ?>/detail.css" rel="stylesheet"> -->
	<link href="public/public1/index/css/common.css" rel="stylesheet">
	<link href="public/public1/index/css/detail.css" rel="stylesheet">
</head>

<body>
<div class="g-body">
    <div class="m-detail">
	<div class="m-simpleHeader" id="dvHeader">
	    <h1>商品详情</h1>
	</div>
        <div class="g-wrap">
            <div class="g-wrap-hd">
                <div id="pro-view-1" class="w-slide m-detail-show">
                    <div class="w-slide-wrap">
                        <ul style="width: 100%;" class="w-slide-wrap-list" data-pro="list">
                            <li data-pro="item" class="w-slide-wrap-list-item selected">
                                <img src="<?php echo ($goods["image"]); ?>" width="410px"  height="200px">
                            </li>
                        </ul>	
                    </div>
                </div>
                <div class="w-goods w-goods-xxl m-detail-goods">
                    <div class="w-goods-info">
                        <p class="w-goods-title"><?php echo ($goods["name"]); ?></p>
                        <p class="w-goods-period">期号：<?php echo ($goods["issue"]); ?></p>
                            <div class="w-progressBar">
                                <p class="wrap">
                                    <span class="bar" style="width:<?php echo ($percent); ?>;"><i class="color"></i></span>
                                </p>
                                <ul class="txt">
                                    <li class="txt-l"><p>总需<?php echo ($goods["number"]); ?>人次</p></li>
                                    <li class="txt-l"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($goods["unit_price"]); ?>元/人次</p></li>
                                    <li class="txt-r"><p>剩余<b class="txt-blue"><?php echo ($remainder); ?></b></p></li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
            <div class="g-wrap-bd">
                <div class="m-detail-more">
                    <a href="<?php echo u('Goods/details',array('id' => $goods['id']));?>" class="w-bar">图文详情 <span class="w-bar-hint"></span>
                    	<span class="w-bar-ext"><b class="ico-next"></b></span>
                    </a>
                    <a href="<?php echo u('Goods/past');?>" class="w-bar">往期揭晓<span class="w-bar-ext"><b class="ico-next"></b></span></a>
                    <?php if($user != ''): ?><!-- 此处要填写session值  -->
                    <a href="<?php echo u('User/lucky',array('id' => $goods['id'],'user_id' => 1));?>" class="w-bar">我的幸运码<span class="w-bar-ext"><b class="ico-next"></b></span></a><?php endif; ?>
                </div>
                <div class="m-detail-record">
                    <div class="w-bar">所有参与记录 <span class="w-bar-hint">( 自<?php echo ($goods["begin_time"]); ?>开始 )</span></div>
                    <div class="m-detail-record-wrap">
                        <div style="display: none;" afmoldstyle="block" class="w-loading">
                            <img style="display:inline;vertical-align:middle" src="<?php echo (IMG_URL); ?>/loading.gif" height="20" width="20"> 
                            	正在努力加载中……
                        </div>
                    <div id="pro-view-4">
	                    <ul class="m-detail-record-list" data-pro="entry">
	                    <!-- foreach 循环li -->
		                    
			                    <div class="m-detail-record-time"><?php echo ($now_time); ?></div>
			                    <?php if(is_array($pay_list)): foreach($pay_list as $key=>$pay): ?><li id="pro-view-5">
			                    <div class="f-clear">
				                    <div class="avatar">
					                    <a href="#">
					                    	<img  src="<?php echo ($pay["head"]); ?>" height="35" width="35">
					                    </a>
					                 </div>
					                 <div class="text">
					                    	<p class="f-breakword">
					                    		<a href="#"><?php echo ($pay["user"]); ?></a> 
					                    	</p>
					                    	<p>
					                    		<span class="num">购买了<span class="txt-red"><?php echo ($pay["number"]); ?></span>次</span> <?php echo ($pay["pay_time"]); ?>
					                    	</p>
				                    </div>
			                    </div> 
		                    </li><?php endforeach; endif; ?>
	                    </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
                    <div class="m-simpleFooter m-detail-buy">
                        <div data-pro="text" class="m-simpleFooter-text" style="text-align:center">
                            <a id="quickBuy" class="w-button w-button-main" href="#">立即参与</a>
                        </div>
                        <div data-pro="ext" class="m-simpleFooter-ext"></div>
                    </div>
    </div>
</div>
<button id="pro-view-3" class="w-button w-button-round w-button-backToTop" style="bottom: 55px; display: none;">返回顶部</button>
</body>
</html>