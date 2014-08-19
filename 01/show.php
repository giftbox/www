<?php 
//session_start();
include_once 'conn/conn.php';
echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
$char = $_POST['characters'];
$type = $_POST['findtype'];
if ($type == "") {
	echo "<script>alert('请选择查找类型！'); history.go(-1);</script>";
} elseif ($type == 1) {
	$sqlstr = "select * from tb_meeting_info where meeting_id=$char";
} elseif ($type == 2) {
	$sqlstr = "select * from tb_meeting_info where meeting_name like '%" . $char . "%'";
}
$rst_find = $conn->Execute($sqlstr);
$record = $rst_find->RecordCount();
if ($record == 0) {
	echo "<script>alert('没有匹配的查询结果！'); history.go(-1);</script>";
} else {
?>
<h3>会议信息浏览</h3>
<table width="728" border="0" cellspacing="0" cellpadding="0">
	<tr class="tableheader">
		<td width="55" height="25">会议编号</td>
		<td width="60">会议名称</td>
		<td width="60">部门名称</td>
		<td width="80">会议地点</td>
		<td width="80">会议日期</td>
		<td width="45">主持人</td>
		<td width="60">出席人员</td>
		<td width="45">记录人</td>
		<td width="120">会议摘要</td>
		<td width="60">查看详情</td>
	</tr>
	<?php 
		while (! $rst_find->EOF) {
	?>
	<tr>
		<td height="30"><?php echo $rst_find->fields[0]; ?></td>
		<td height="30"><?php echo $rst_find->fields[1]; ?></td>
		<td height="30"><?php echo $rst_find->fields[2]; ?></td>
		<td height="30"><?php echo $rst_find->fields[3]; ?></td>
		<td height="30"><?php echo $rst_find->fields[4]; ?></td>
		<td height="30"><?php echo $rst_find->fields[5]; ?></td>
		<td height="30"><?php echo $rst_find->fields[6]; ?></td>
		<td height="30"><?php echo $rst_find->fields[7]; ?></td>
		<td height="30"><?php echo $rst_find->fields[8]; ?></td>
		<td height="30" align="center">
			<a href="#" onclick="javascript:Wopen=open('showinfo.php?id=<?php echo $rst_find->fields[0]; ?>', '_blank', 'height=440,width=640,scrollbars=no');">
				<img src="images/xiazai.gif" width="26" height="18" border="0" alt="详情" />			
			</a>
		</td>
	</tr>
	<?php
			$rst_find->movenext();
		}
	?>
</table>
<?php 
}
?>