<?php 
session_start();
include_once 'conn/conn.php';
echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
$pwd = $_POST["olderpwd"];
if (! empty($pwd)) {
	$sqlchk = "select userPassword from tb_meeting_user where userId=$_SESSION[id]";
	$amend_rst = $conn->Execute($sqlchk);
	if ($pwd == $amend_rst->fields[0]) {
		echo "<meta http-equiv='refresh' content='0; url=manager.php?lmbs=修改密码' />";	
	} else {
		echo "<script>alert('原密码输入错误， 请输入正确的密码！'); history.go(-1);</script>";
	}
} else {
	echo "<script>alert('请输入原密码！'); history.go(-1);</script>";
}
