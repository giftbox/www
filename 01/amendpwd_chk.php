<?php
	session_start();
	include_once 'conn/conn.php';
	echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
	if (empty($_POST["newpwd"]) or empty($_POST["newpwdtwice"])) {
		echo "<script>alert('两次输入的密码不能为空！'); history.go(-1);</script>";
	} else {
		if ($_POST["newpwd"] == $_POST["newpwdtwice"]) {
			$sqlstr = "update tb_meeting_user set userPassword='$_POST[newpwdtwice]' where userId=$_SESSION[id]"; //注意单双引号
			$apwd_rst = $conn->Execute($sqlstr);
			if ($apwd_rst) {
				echo "<script>alert('修改成功！'); history.go(-1);</script>";
			} else {
				echo "<script>alert('修改失败！'); history.go(-1);</script>";
			}
		} else {
			echo "<script>alert('两次输入的密码不一致！'); history.go(-1);</script>";
		}
	}
?>