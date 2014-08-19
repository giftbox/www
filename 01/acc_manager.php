<?php 
//session_start();
include_once 'conn/conn.php';
if ($_SESSION["rights"] != 1) {
	echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
	echo "<script>alert('非法操作！'); history.go(-1);</script>";
} else  {
	$sqlstr = "select * from tb_meeting_user";
	$num = 5; //每页显示记录数
	if (isset($_GET['n_page'])) {
		$c_page = $_GET['n_page']; //点击过翻页链接，则该页数作为参数到数据库中查询对应页
	} else {
		$c_page = 1; //未点击过翻页链接，即初次进入页面时所在的页数为1
	}
	$l_rst = $conn->PageExecute($sqlstr, $num, $c_page);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/acc_manager.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
	function suretodelete() {
		if (confirm("确定删除此账户？")) {
			return true;
		} else {
			return false;
		}
	}
	function suretofreeze() {
		if (confirm("确定改变此账户冻结状态？")) {
			return true;
		} else {
			return false;
		}
	}
	function suretoset() {
		if (confirm("确定改变此账户权限？")) {
			return true;
		} else {
			return false;
		}
	}
</script>
<title>无标题文档</title>
</head>
<body>
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td align="center" colspan="7" height="32"><h3>用户账户管理</h3></td>
		</tr>
		<tr>
			<td align="center" bgcolor="#cccccc" width="30" height="16">ID</td>
			<td align="center" bgcolor="#cccccc" width="70" height="16">用户名</td>
			<td align="center" bgcolor="#cccccc" width="80" height="16">用户密码</td>
			<td align="center" bgcolor="#cccccc" width="80" height="16">所属部门</td>
			<td align="center" bgcolor="#cccccc" width="80" height="16">修改权限</td>
			<td align="center" bgcolor="#cccccc" width="80" height="16">冻结账户</td>
			<td align="center" bgcolor="#cccccc" width="80" height="16">删除</td>
		</tr>
		<?php 
			while (! $l_rst->EOF) {
		?>
		<tr>
			<td height="26"><?php echo $l_rst->fields[0]; ?></td>
			<td><?php echo $l_rst->fields[1]; ?></td>
			<td><?php echo $l_rst->fields[2]; ?></td>
			<td><?php echo $l_rst->fields[7]; ?></td>
			<td>
				<form action="acc_manager_chk.php" method="post" onsubmit="return suretoset()">
					<input type="submit" name="select_action" value="<?php if ($l_rst->fields[5] == 0) {echo "设置权限";} else {echo "取消权限";} ?>" />
					<input type="hidden" name="select_id" value="<?php echo $l_rst->fields[0] ?>" />
				</form>
			</td>
			<td>
				<form action="acc_manager_chk.php" method="post" onsubmit="return suretofreeze()">
					<input type="submit" name="select_action" value="<?php if ($l_rst->fields[6] == 0) {echo "冻结账户";} else {echo "解冻账户";} ?>" />
					<input type="hidden" name="select_id" value="<?php echo $l_rst->fields[0] ?>" />
				</form>
			</td>
			<td>
				<form action="acc_manager_chk.php" method="post" onsubmit="return suretodelete()">
					<input type="submit" name="select_action" value="删除账户" />
					<input type="hidden" name="select_id" value="<?php echo $l_rst->fields[0] ?>" />
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
	<div align="left" style="margin: 20px auto">
		<span style="color:#ff0000">点此添加新用户&gt;&gt;&gt;</span>
		<a href="#" onclick="javascript:Wopen=open('addaccount.php', '_blank', 'height=240,width=440,scrollbars=no');">
			<img src="images/append_15.jpg" alt="" width="48" height="20" border="0" />
		</a>
	</div>
</body>
</html>
<?php 
}
?>