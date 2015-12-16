<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>图文详情</title>
<meta name="description" content="1元夺宝">
<meta name="keywords" content="1元夺宝">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
<meta content="telephone=no" name="format-detection">
<link href="../../../../../Public/public1/index/css/goods_details/common.css" rel="stylesheet">
<link href="../../../../../Public/public1/index/css/goods_details/detail.css" rel="stylesheet">
</head>
<body>

<div class="g-body">
    <div class="m-intro">
	<div class="m-simpleHeader" id="dvHeader">
	    <a data-pro="back" onClick="javascript :history.back(-1);" data-back="true" class="m-simpleHeader-back"><i class="ico-back"></i></a>
	    <h1>商品详情</h1>
	</div>
        <div class="g-wrap m-intro-picWrap" id="l_main"><?php echo ($goods); ?></div>
    </div>
</div>
<button class="w-button w-button-round w-button-backToTop" style="display: none;" id="pro-view-0">返回顶部</button>
</body>
</html>