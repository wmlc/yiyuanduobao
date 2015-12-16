<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>/pay_list/style.css">
<link rel="stylesheet" href="<?php echo (CSS_URL); ?>/pay_list/default.css"></head>
<body>
<div id="info"></div>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>/pay_list/weebox.css">
<div class="main">
			<div class="main_title"><?php echo ($pay_name); ?>-购买列表</div>
<div class="blank5"></div>
<div class="button_row">
	<div class="main_title"> <a href="<?php echo u("Index/main");?>" class="back_list">返回首页</a></div>

</div>
<div class="blank5"></div>
<div class="blank5"></div>
<!-- Think 系统列表组件开始 -->
<table id="dataTable" class="dataTable" cellpadding="0" cellspacing="0">
	<tbody>
		<tr><td colspan="16" class="topTd">&nbsp; </td></tr>
		<tr class="row">
			<th width="100px">订单编号</th>
			<th width="300px">商品名称   </th>
			<th width="150px">购买人 </th>
			<th width="100px">购买数量  </th>
			<th width="100px">支付总额  </th>
			<th width="200px">支付时间  </th>
		</tr>
		<?php if(is_array($pay_list)): foreach($pay_list as $key=>$pay): ?><tr class="row" align="center">
				<td>&nbsp;<?php echo ($pay["id"]); ?></td>
				<td>&nbsp;<?php echo ($pay_name); ?></td>
				<td>&nbsp;<?php echo ($pay["user"]); ?></td>
				<td>&nbsp;<?php echo ($pay["number"]); ?></td>
				<td>&nbsp;¥<?php echo ($pay["money"]); ?></td>
				<td>&nbsp;<?php echo ($pay["pay_time"]); ?></td>
			</tr><?php endforeach; endif; ?>
	</tbody>
</table>
<!-- Think 系统列表组件结束 -->
 

<div class="blank5"></div>

</div>

</body></html>