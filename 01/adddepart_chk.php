<?php 
session_start();
include_once 'conn/conn.php';
echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
if (empty($_POST["departname"])) {
	echo "<script>alert('请输入部门名称！'); history.go(-1);</script>";
} else {
	$sqlstr = "select * from tb_meeting_depart where department_name='$_POST[departname]'";
	$rst_chk = $conn->Execute($sqlstr);
	if (! $rst_chk->EOF) {
		echo "<script>alert('该部门已存在！请重新添加。'); history.go(-1);</script>";
	} else {
		$newdepart = $_POST["departname"];
		$sqlstrnew = "insert into tb_meeting_depart (department_name) values ('$newdepart')";
		$rst_nd = $conn->Execute($sqlstrnew);
		if ($rst_nd) {
			echo "<script>alert('添加成功！'); window.close();</script>";
		} else {
			echo "<script>alert('添加失败！请重新添加。'); history.go(-1);</script>";
		}
	}
}
?>