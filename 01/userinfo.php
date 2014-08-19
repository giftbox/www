<?php
	//session_start();
	include_once 'conn/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/userinfo.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
	function logout() {
		if (confirm("确定要退出登录吗？")) {
			window.open('logout.php', '_parent', '', false); //如果确认退出则打开logout.php
		} else {
			return false;
		}
	}
</script>
<title>登录信息</title>
</head>
<body>
	<div class="userinfo1">
		<?php 
			$sqlstrvi = "select * from tb_meeting_user where userId=$_SESSION[id]";
			$i_rstuser = $conn->Execute($sqlstrvi);
		?>
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td width="120" align="center">
					尊敬的：
					<?php echo $i_rstuser->fields[1]; ?>
				</td>
				<td width="160">
					您的身份为：
					<?php 
						if ($i_rstuser->fields[5] == 0) { //判断权限
							echo "<span style='color:#cc99ff'>普通用户</span>";
						} elseif ($i_rstuser->fields[5] == 1) {
							echo "<span style='color:#ff0000'>管理员</span>";
						}
					?>
				</td>
				<td width="200">
					当前日期为：
					<span>
						<?php echo date("Y年m月d日"); ?>
					</span>
				</td>
				<td width="250">
					上次登录时间：
					<?php 
						if ($i_rstuser->fields[4] == 1) { //是否首次登录
							echo "------";
						} else {
							echo date("Y年m月d日 H:i:s", strtotime($_SESSION["lasttime"])); //SESSION中是上次登录时间，数据库中是当前登录时间
						}
					?>
				</td>
				<td width="160">
					当前为第
					<?php echo $i_rstuser->fields[4]; ?>
					次登录</td>
				<td width="51">
					<img src="images/over3.png" width="49" height="19" border="0" onclick="logout()" />
				</td>
			</tr>
		</table>
	</div>
</body>
</html>