<?php
	//session_start();
	include_once 'conn/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/showinfo.css" type="text/css" rel="stylesheet" />
<title>会议详情</title>
</head>
<body>
	<?php 
		$id = $_GET["id"];
		$sqlstr = "select * from tb_meeting_info where meeting_id = $id";
		$s_rst = $conn->Execute($sqlstr);
	?>
	<div class="infoshow">
		<table width="560" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td colspan="4" align="center"><h3 class="ht">会议记录详情</h3></td>
			</tr>
			<tr>
				<td width="139"><div align="right">会议编号：</div></td>
				<td width="320"><?php echo $s_rst->fields[0] ?></td>
				<td width="169"><div align="right">会议名称：</div></td>
				<td width="341"><?php echo $s_rst->fields[1] ?></td>
			</tr>
			<tr>
				<td><div align="right">部门名称：</div></td>
				<td><?php echo $s_rst->fields[2] ?></td>
				<td><div align="right">会议地点：</div></td>
				<td><?php echo $s_rst->fields[3] ?></td>
			</tr>
			<tr>
				<td><div align="right">会议日期：</div></td>
				<td><?php echo $s_rst->fields[4] ?></td>
				<td><div align="right">会议主持人：</div></td>
				<td><?php echo $s_rst->fields[5] ?></td>
			</tr>
			<tr>
				<td><div align="right">出席人员：</div></td>
				<td><?php echo $s_rst->fields[6] ?></td>
				<td><div align="right">会议记录人：</div></td>
				<td><?php echo $s_rst->fields[7] ?></td>
			</tr>
			<tr>
				<td><div align="right">会议摘要：</div></td>
				<td colspan="3"><div align="left"><?php echo $s_rst->fields[8] ?></div></td>
			</tr>
			<tr>
				<td height="23"><div align="right">会议内容：</div></td>
				<td height="23" colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<td height="200" colspan="4">
					<textarea class="content" readonly="readonly"><?php 
						$address = $s_rst->fields[9];
						$myfile = fopen($address, "r");
						while (! feof($myfile)) {
							echo fgets($myfile);
						}
						fclose($myfile);
					?></textarea>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>