<?php
	//session_start();
	include_once 'conn/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/addmeeting.css" type="text/css" rel="stylesheet" />
<link href="css/manager.css" type="text/css" rel="stylesheet" />
<style type="text/css">
	body {
		background: #ffffcc;
	}
	.add_mbtn1 {
		background: url(images/modify.jpg);
	}
</style>
<script type="text/javascript" src="js/addmeeting.js"></script>
<title>修改会议记录</title>
</head>
<body>
<?php 
	$id = $_GET["id"];
	$sqlstrupdate = "select * from tb_meeting_info where meeting_id=$id";
	$rst_update = $conn->Execute($sqlstrupdate);
?>
	<div class="add_m_info">
		<form id="theForm" action="amendmeeting_chk.php" method="post" onsubmit="return check_submit(this)">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr><td colspan="3" height="32"><h1 align="center">修改会议记录</h1></td></tr>
				<tr>
					<td width="120" height="28"><div align="center">会议名称：</div></td>
					<td><input class="input2" type="text" name="meeting_name" value="<?php echo $rst_update->fields[1] ?>" /></td>
					<td align="left" width="180"><span class="sp1">*修改会议记录名称</span></td>
				</tr>
				<tr>
					<td height="28"><div align="center">部门名称：</div></td>
					<td>
						<div align="center">
							<select class="upload" name="department" style="width: 203px;">
								<option value="">请修改部门</option>
								<?php 
									$sqlstr = "select department_name from tb_meeting_depart";
									$l_rst = $conn->Execute($sqlstr);
									while (! $l_rst->EOF) {
								?>
								<option <?php if($l_rst->fields[0]==$rst_update->fields[2]){ ?> selected="selected" <?php } ?> value="<?php echo $l_rst->fields[0]; ?>"><?php echo $l_rst->fields[0]; ?></option>
								<?php 
										$l_rst->movenext();
									}
								?>
							</select>
						</div>
					</td>
					<td align="left" width="180"><span class="sp1">*修改举行会议部门</span></td>
				</tr>
				<tr>
					<td height="28"><div align="center">会议地点：</div></td>
					<td><input class="input2" type="text" name="meetin_place" value="<?php echo $rst_update->fields[3] ?>" /></td>
					<td align="left" width="180"><span class="sp1">*修改会议地点名称</span></td>
				</tr>
				<tr>
					<td height="28"><div align="center">会议日期：</div></td>
					<td>
						<select class="upload" name="b_y" style="width: 55px;">
							<?php 
								$thisy = date("Y", strtotime($rst_update->fields[4]));
								for ($i = 2014; $i < 2020; $i++) {
									echo "<option ";
									if ($i == $thisy) {
										echo 'selected="selected" ';
									}
									echo "value=" .$i . ">" . $i . "</option>";
								}
							?>
						</select>&nbsp;年
						<select class="upload" name="b_m" style="width: 41px;">
							<?php 
								$thism = date("m", strtotime($rst_update->fields[4]));
								for ($i = 1; $i < 13; $i++) {
									echo "<option ";
									if ($i == $thism) {
										echo 'selected="selected" ';
									}
									echo "value=" .$i . ">" . $i . "</option>";
								}
							?>
						</select>&nbsp;月
						<select class="upload" name="b_d" style="width: 41px;">
							<?php 
								$thisd = date("d", strtotime($rst_update->fields[4]));
								for ($i = 1; $i < 32; $i++) {
									echo "<option ";
									if ($i == $thisd) {
										echo 'selected="selected" ';
									}
									echo "value=" .$i . ">" . $i . "</option>";
								}
							?>
						</select>&nbsp;日
					</td>
					<td align="left" width="180"><span class="sp1">*修改会议召开日期</span></td>
				</tr>
				<tr>
					<td height="28"><div align="center">会议主持人：</div></td>
					<td><input class="input2" type="text" name="meeting_host" value="<?php echo $rst_update->fields[5] ?>" /></td>
					<td align="left" width="180"><span class="sp1">*修改会议主持人&nbsp;&nbsp;</span></td>
				</tr>
				<tr>
					<td height="28"><div align="center">会议记录人：</div></td>
					<td><input class="input2" type="text" name="meeting_saver" value="<?php echo $rst_update->fields[7] ?>" /></td>
					<td align="left" width="180"><span class="sp1">*修改会议记录人</span></td>
				</tr>
				<tr>
					<td height="28"><div align="center">出席人员：</div></td>
					<td><input class="input2" type="text" name="meeting_present" value="<?php echo $rst_update->fields[6] ?>" /></td>
					<td align="left" width="180"><span class="sp1">*修改会议出席人员</span></td>
				</tr>
				<tr>
					<td><div align="center">会议摘要：</div></td>
					<td height="70"><textarea style="width:203px; border: solid 1px #cccccc" name="textarea" rows="4"><?php echo $rst_update->fields[8] ?></textarea></td>
					<td align="left" width="180"><span class="sp1">*修改会议记录摘要</span></td>
				</tr>
				<tr>
					<td height="50" colspan="3">
						<center>
							<input type="hidden" name="theid" value="<?php echo $id; ?>" />
							<input class="add_mbtn1" type="submit" value="" />
							&nbsp;&nbsp;&nbsp;
							<input class="add_mbtn2" type="reset" value="" />
						</center>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>