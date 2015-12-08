<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>夺宝后台</title>
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>/login.css" />
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
<form action="<?php echo u("Admin/do_login");?>" method="post">
<table border="0" cellpadding="0" cellspacing="0" class="login_bar">
  <tr>
  	<td width="330" align="right"></td>
	<td width="63"><img src="<?php echo (IMG_URL); ?>/line.png" border="0" /></td>
	<td>
		<table border="0" cellpadding="0" cellspacing="0" class="login_f">
			<tr>
				<td>&nbsp;</td>
				<td id="login_msg">&nbsp;</td>
			</tr>
			<tr>
				<td><b>账&nbsp;&nbsp;户：</b></td>
				<td><input type="text" name="adm_name" class="adm_name"></td>
			</tr>
			<tr>
				<td><b>密&nbsp;&nbsp;码：</b></td>
				<td><input type="password"  name="adm_password" class="adm_password"></td>
			</tr>
			<tr>
				<td><b>验证码：</b></td>
				<td id="verify_sx">
					<input type="text"  class="login_input adm_verify" name="adm_verify">
					<img src="<?php echo U('Admin/verify',array());?>"  id="verify" align="absmiddle"  alt="验证码"/> <span></span>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit"  class="adm_password"  value="登陆"  name="login" id="login_btn" alt="登录">
				</td>
			</tr>
		</table>
	</td>
  </tr>
</table>
</form>
</body>
</html>