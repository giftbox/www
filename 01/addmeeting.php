<?php
	//session_start();
	include_once 'conn/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/addmeeting.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/addmeeting.js"></script>
<title>无标题文档</title>
</head>
<body>
	<div class="add_m_info">
		<!-- enctype 属性规定提交表单时使用二进制数据 -->
		<form id="theForm" action="addmeeting_chk.php" method="post" onsubmit="return check_submit(this)" enctype="multipart/form-data">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr><td colspan="3" height="32"><h1 align="center">添加会议记录</h1></td></tr>
				<tr>
					<td width="120" height="28"><div align="center">会议名称：</div></td>
					<td><input class="input2" type="text" name="meeting_name" /></td>
					<td align="left" width="180"><span class="sp1">*填写会议记录名称</span></td>
				</tr>
				<tr>
					<td height="28"><div align="center">部门名称：</div></td>
					<td>
						<div align="center">
							<select class="upload" name="department" style="width: 203px;">
								<option value="">请选择部门</option>
								<?php 
									$sqlstr = "select department_name from tb_meeting_depart";
									$l_rst = $conn->Execute($sqlstr);
									while (! $l_rst->EOF) {
								?>
								<option value="<?php echo $l_rst->fields[0]; ?>"><?php echo $l_rst->fields[0]; ?></option>
								<?php 
										$l_rst->movenext();
									}
								?>
							</select>
						</div>
					</td>
					<td align="left" width="180"><span class="sp1">*选择举行会议部门</span></td>
				</tr>
				<tr>
					<td height="28"><div align="center">会议地点：</div></td>
					<td><input class="input2" type="text" name="meetin_place" /></td>
					<td align="left" width="180"><span class="sp1">*填写会议地点名称</span></td>
				</tr>
				<tr>
					<td height="28"><div align="center">会议日期：</div></td>
					<td>
						<select class="upload" name="b_y" style="width: 55px;">
							<?php 
								for ($i = 2014; $i < 2020; $i++) {
									echo "<option value=" . $i . ">" . $i . "</option>";
								}
							?>
						</select>&nbsp;年
						<select class="upload" name="b_m" style="width: 41px;">
							<?php 
								for ($i = 1; $i < 13; $i++) {
									echo "<option value=" . $i . ">" . $i . "</option>";
								}
							?>
						</select>&nbsp;月
						<select class="upload" name="b_d" style="width: 41px;">
							<?php 
								for ($i = 1; $i < 32; $i++) {
									echo "<option value=" . $i . ">" . $i . "</option>";
								}
							?>
						</select>&nbsp;日
					</td>
					<td align="left" width="180"><span class="sp1">*选择会议召开日期</span></td>
				</tr>
				<tr>
					<td height="28"><div align="center">会议主持人：</div></td>
					<td><input class="input2" type="text" name="meeting_host" /></td>
					<td align="left" width="180"><span class="sp1">*填写会议主持人&nbsp;&nbsp;</span></td>
				</tr>
				<tr>
					<td height="28"><div align="center">会议记录人：</div></td>
					<td><input class="input2" type="text" name="meeting_saver" /></td>
					<td align="left" width="180"><span class="sp1">*填写会议记录人</span></td>
				</tr>
				<tr>
					<td height="28"><div align="center">出席人员：</div></td>
					<td><input class="input2" type="text" name="meeting_present" /></td>
					<td align="left" width="180"><span class="sp1">*填写会议出席人员</span></td>
				</tr>
				<tr>
					<td height="28">上传会议内容：</td>
					<td><input class="upload" name="meeting_documents" type="file" size="16" style="width: 203px;" /></td>
					<td align="left" width="180"><span class="sp1">*上传txt格式会议文稿</span></td>
				</tr>
				<tr>
					<td><div align="center">会议摘要：</div></td>
					<td height="70"><textarea style="width:203px; border: solid 1px #cccccc" name="textarea" rows="4"></textarea></td>
					<td align="left" width="180"><span class="sp1">*填写会议记录摘要</span></td>
				</tr>
				<tr>
					<td height="50" colspan="3">
						<center>
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