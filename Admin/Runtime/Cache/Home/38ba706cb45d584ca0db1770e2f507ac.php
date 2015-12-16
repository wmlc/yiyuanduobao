<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>夺宝</title>
	
	<link href="<?php echo (CSS_URL); ?>/admin_main/css/weebox.css" rel="stylesheet">
	<link href="<?php echo (CSS_URL); ?>/admin_main/css/calendar.css" rel="stylesheet">
	<link href="<?php echo (CSS_URL); ?>/admin_main/css/style.css" rel="stylesheet">
	<link href="<?php echo (CSS_URL); ?>/admin_main/css/default.css" rel="stylesheet">
</head>
<script type="text/javascript">



</script>

<body>



<div class="main">
<div class="main_title">上线商品</div>
<div class="blank5"></div>
<div class="button_row">
	<a href="<?php echo u('Goods/add');?>" target="_self"><input type="button" class="button" value=" 新增商品 " /></a>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="<?php echo u('User/user_list');?>" target="_self"><input type="button" class="button" value=" 会员列表 " /></a>
</div>
<div class="blank5"></div>
<div class="search_row">
	
</div>
<div class="blank5"></div>
<table id="dataTable" class="dataTable" cellpadding="0" cellspacing="0">
	<tbody>
		<tr><td colspan="17" class="topTd">&nbsp; </td></tr>
		<tr class="row">
			<th width="50px">编号</th>
			<th width="150px   ">商品名称  </th>
			<th width="100px   ">总价</th>
			<th width="100px   ">单价 </th>
			<th width="80px   ">份数</th>
			<th width="80px   ">已购买数</th>
			<th width="150px   ">状态</th>
			<th width="150px   ">创建时间</th>
			<th width="150px   ">开始时间</th>
			<th width="150px   ">结束时间</th>
			<th width="150px   ">幸运号 </th>
			<th width="150px   ">中奖人（id-昵称）</th>
			<th width="300px">操作</th>
		</tr>
		<?php if(is_array($goods_list)): foreach($goods_list as $key=>$goods): ?><tr class="row">
			<td>&nbsp;<?php echo ($goods["id"]); ?></td>
			<td>&nbsp;<?php echo ($goods["name"]); ?></a></td>
			<td>&nbsp;<?php echo ($goods["total_price"]); ?></td>
			<td>&nbsp;<?php echo ($goods["unit_price"]); ?></td>
			<td>&nbsp;<?php echo ($goods["number"]); ?></td>
			<td>&nbsp;<?php echo ($goods["pay_number"]); ?></td>
			<td>&nbsp;<span><?php echo ($goods["type"]); ?></span></td>
			<td>&nbsp;<span class="sort_span" ><?php echo ($goods["creat_time"]); ?></span></td>
			<td>&nbsp;<span class="sort_span" ><?php echo ($goods["begin_time"]); ?></span></td>
			<td>&nbsp;<span class="is_effect" ><?php echo ($goods["end_time"]); ?></span></td>
			<td>&nbsp;<span class="is_effect" ><?php echo ($goods["lucky_number"]); ?></span></td>
			<td>&nbsp;<span class="is_effect" >
			<?php echo ($goods["user_id"]); ?>-<?php echo ($goods["user"]); ?>
			
			</span></td>
			<td> 
				 【<?php echo ($goods["id"]); ?>】
				 <a href="<?php echo u('Goods/edit',array('id' => $goods['id']));?>">编辑</a>&nbsp;&nbsp;
				 <a href="<?php echo u('Goods/delete',array('id' => $goods['id']));?>">删除</a>&nbsp;&nbsp; 
				 <a href="<?php echo u('Goods/input_lucky',array('id' => $goods['id']));?>">输入幸运号</a>&nbsp; &nbsp; 
				 <a href="<?php echo u('Goods/pay_list',array('id' => $goods['id']));?>">购买列表</a>&nbsp;
		    </td>
		</tr><?php endforeach; endif; ?>
	</tbody>
</table>
<div class="blank5"></div>
</div>
</body>
</html>