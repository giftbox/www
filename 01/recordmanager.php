<?php
	//session_start();
	include_once 'conn/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/recordmanager.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
	function suretodelete() {
		if (confirm("确定删除此记录？")) {
			return true;
		} else {
			return false;
		}
	}
</script>
<title>无标题文档</title>
</head>
<body>
	<h3>会议信息管理</h3>
	<?php 
		$sqlview = "select * from tb_meeting_info";
		$num = 5; //每页显示记录数
		if (isset($_GET['n_page'])) { //判断当前要显示的页
			$c_page = $_GET['n_page'];
		} else {
			$c_page = 1;
		}
		$l_rst = $conn->PageExecute($sqlview, $num, $c_page); //按每页显示记录数和页数，显示查询结果
		$rst_view = $conn->Execute($sqlview);
		//$record = count($rst_view->GetRows()); //获得总记录数
		$record = $rst_view->RecordCount(); //获得总记录数
		if ($record == 0) {
			echo "<span class='norecord'>当前没有任何记录</span>";
		} else {
	?>
	<table width="728" border="0" cellspacing="0" cellpadding="0">
		<tr class="tableheader">
			<td width="55" align="center" height="25">会议编号</td>
			<td width="60" align="center">会议名称</td>
			<td width="60" align="center">部门名称</td>
			<td width="80" align="center">会议地点</td>
			<td width="80" align="center">会议日期</td>
			<td width="45" align="center">主持人</td>
			<td width="60" align="center">出席人员</td>
			<td width="45" align="center">记录人</td>
			<td width="120" align="center">修改记录</td>
			<td width="60" align="center">删除记录</td>
		</tr>
		<?php 
			while (! $l_rst->EOF) {
		?>
		<tr>
			<td height="30"><?php echo $l_rst->fields[0]; ?></td>
			<td height="30"><?php echo $l_rst->fields[1]; ?></td>
			<td height="30"><?php echo $l_rst->fields[2]; ?></td>
			<td height="30"><?php echo $l_rst->fields[3]; ?></td>
			<td height="30"><?php echo $l_rst->fields[4]; ?></td>
			<td height="30"><?php echo $l_rst->fields[5]; ?></td>
			<td height="30"><?php echo $l_rst->fields[6]; ?></td>
			<td height="30"><?php echo $l_rst->fields[7]; ?></td>
			<td height="30" align="center">
				<a href="#" onclick="javascript:Wopen=open('amendmeeting.php?id=<?php echo $l_rst->fields[0]; ?>', '_blank', 'height=440,width=640,scrollbars=no');">
					<img src="images/amend.ico" width="16" height="16" border="0" alt="修改" />
				</a>
			</td>
			<td height="30" align="center">
				<form action="deletemeeting.php?id=<?php echo $l_rst->fields[0]; ?>" method="post"onsubmit="return suretodelete()">
					<input class="btn2" type="submit" value="" name="deletemeeting" />
				</form>
			</td>
		</tr>
		<?php
				$l_rst->movenext(); 
			}
		?>
	</table>
	<div class="sepa_page">
		<table>
			<tr>
				<td>
					<font color="#999999">当前是第 <?php echo $l_rst->absolutePage(); ?> 页/共 <?php echo $l_rst->LastPageNo(); ?> 页</font>
					<?php 
						if (! $l_rst->AtfirstPage()) { //若当前不是首页
					?>
					<!-- 自己创建$_GET变量附加到链接中，达到翻页效果 -->
					<a href='<?php echo "?lmbs=$_GET[lmbs]&n_page=1"; ?>'> 首页 </a>
					<a href='<?php echo "?lmbs=$_GET[lmbs]&n_page=".($l_rst->absolutePage()-1); ?>'> 上一页 </a>
					<?php 
						}
						if (! $l_rst->AtlastPage()) { //若当前不是尾页
					?>
					<a href='<?php echo "?lmbs=$_GET[lmbs]&n_page=".($l_rst->absolutePage()+1); ?>'> 下一页 </a>
					<a href='<?php echo "?lmbs=$_GET[lmbs]&n_page=".($l_rst->LastPageNo()); ?>'> 尾页 </a>
					<?php 
						}
					?>
				</td>
			</tr>
		</table>
	</div>
	<?php 
		}
	?>
</body>
</html>