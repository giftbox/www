<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/amendinfo.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/amendinfo.js"></script>
<title>用户信息修改</title>
</head>
<body>
	<form id="insertpwd" action="amendinfo_chk.php" method="post" onsubmit="return check_submit(this)">
		<table>
			<tr>
				<td colspan="2"><h3>修改密码</h3></td>
			</tr>
			<tr>
				<td height="22">用户名：</td>
				<td align="left">
					<span style="color:#0033ff"><?php echo $_SESSION["name"] ?></span>
				</td>
			</tr>
			<tr>
				<td height="22">输入原密码：</td>
				<td>
					<input style="border:1px solid #cccccc" type="password" name="olderpwd" />
				</td>
			</tr>
			<tr>
				<td height="22" colspan="2">
					<input class="ame_btn1" type="submit" value="" />
					<input class="ame_btn2" type="reset" value="" />
				</td>
			</tr>
		</table>	
	</form>
</body>
</html>