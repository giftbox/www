<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/login.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/myscript.js"></script>
<title>用户登录</title>
</head>
<body>
	<div class="login">
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td colspan="4" height="22"><center>
					<img src="images/首页_06_1.jpg" alt="" width="500" height="22" />
				</center></td>
			</tr>
			<tr>
				<td rowspan="3" width="25">
					<img src="images/首页_06_2.jpg" alt="" width="25" height="350" />
				</td>
				<td colspan="2" height="120">
					<img src="images/logo.png" alt="" width="400" height="120" />
					<center></center>
				</td>
				<td rowspan="3" width="24" align="right">
					<img src="images/首页_06_4.jpg" alt="" width="24" height="350" />
				</td>
			</tr>
			<tr>
				<td width="134" align="right">
					<img src="images/login_fb.png" alt="" width="80" height="80" />
				</td>
				<td width="319" height="86"><div class="loginframe">
					<h4>用&nbsp;户&nbsp;登&nbsp;录</h4>
					<form method="post" action="login_chk.php" onsubmit="return validate_form(this)">
						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td width="68" height="42">
									<div align="right">用户名：</div>
								</td>
								<td width="163">
									<input class="input1" id="username" type="text" name="username" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" />
								</td>
							</tr>
							<tr>
								<td width="68" height="42">
									<div align="right">密&nbsp;&nbsp;码：</div>
								</td>
								<td width="163">
									<input class="input2" id="pass" type="password" name="pass" onmouseover="this.style.backgroundColor='#deebef'" onmouseout="this.style.backgroundColor=''" />
								</td>
							</tr>
							<tr>
								<td colspan="2" height="22"><center>
									<input name="submit" type="submit" class="btnlogin" value="" />
									&nbsp;
									<input name="reset" type="reset" class="btnreset" value="" />
								</center></td>
							</tr>
						</table>
					</form>				
				</div></td>
			</tr>
			<tr>
				<td colspan="2" height="22">
					<p class="loginbottom">版权所有</p>
					<p class="loginbottom">客服电话：88-888888</p>
				</td>
			</tr>
			<tr>
				<td colspan="4" height="25"><center>
					<img src="images/首页_06_5.jpg" alt="" width="500" height="25" />
				</center></td>
			</tr>
		</table>
	</div>
</body>
</html>