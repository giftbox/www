<?php 
	//session_start();
	include_once 'conn/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/departmanager.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
	function suretodelete() {
		if (confirm("确定删除此部门？")) {
			return true;
		} else {
			return false;
		}
	}
</script>
<title>部门管理</title>
</head>
<body>
	<table cellpadding="0" cellspacing="0" border="0">
		<tr><td colspan="3"><h3>部门管理</h3></td></tr>
		<tr>
			<td bgcolor="#cccccc" width="60">部门ID</td>
			<td bgcolor="#cccccc" width="150">部门名称</td>
			<td bgcolor="#cccccc" width="60">操作</td>
		</tr>
		<?php 
			$sqldep = "select * from tb_meeting_depart";
			$dep_rst = $conn->Execute($sqldep);
			while (! $dep_rst->EOF) {
		?>
		<tr>
			<td height="26"><?php echo $dep_rst->fields[0]; ?></td>
			<td><?php echo $dep_rst->fields[1]; ?></td>
			<td>
				<form action="deldepart.php?id=<?php echo $dep_rst->fields[0]; ?>" method="post" onsubmit="return suretodelete()">
					<input class="btn1_d" type="submit" value="" />
				</form>
			</td>
		</tr>
		<?php
				$dep_rst->movenext(); 
			}
		?>
	</table>
	<div align="left" style="margin: 20px auto">
		<span style="color:#ff0000">点此增加部门&gt;&gt;&gt;</span>
		<a href="#" onclick="javascript:Wopen=open('adddepart.php', '_blank', 'height=240,width=440,scrollbars=no');">
			<img src="images/append_15.jpg" alt="" width="48" height="20" border="0" />
		</a>
	</div>
</body>
</html>