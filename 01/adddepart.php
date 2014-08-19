<?php 
	session_start();
	include_once 'conn/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/adddepart.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/adddepart.js"></script>
<title>添加部门</title>
</head>
<body>
	<div class="add_dpt">
		<form action="adddepart_chk.php" method="post" onsubmit="return check_submit(this)">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td height="26" colspan="2" align="center"><h3>添加部门</h3></td>
				</tr>
				<tr>
					<td>新部门名称：</td>
					<td height="26">
						<input type="text" name="departname" />
					</td>
				</tr>
				<tr>
					<td height="26" colspan="2" align="center">
						<input class="btn1" type="submit" value="" />
					</td>
				</tr>
			</table>
		</form>	
	</div>
</body>
</html>