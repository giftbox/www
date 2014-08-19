<?php
session_start();
date_default_timezone_set('Asia/Shanghai'); //设置时区
include_once 'conn/conn.php'; //加载数据库连接文件
echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
if (empty($_POST["username"]) or empty($_POST["pass"])) {
	echo "<script>alert('用户名或密码不能为空！'); history.go(-1);</script>";
} else {
	$username = $_POST["username"];
	$pass = $_POST["pass"];
	$sqltest = "select * from tb_meeting_user where userName='$username'"; //判断用户名是否存在
	$testrst = $conn->Execute($sqltest);
	if (! $testrst->EOF) {
		$sqlstr = "select * from tb_meeting_user where userName='$username' and userPassword='$pass'"; //判断用户名和密码是否匹配
		$rst = $conn->Execute($sqlstr);
		if (! $rst->EOF) {
			if ($rst->fields[6] == 0) { //判断账户是否被冻结
				$_SESSION["id"] = $rst->fields[0];
				$_SESSION["name"] = $rst->fields[1];
				$_SESSION["rights"] = $rst->fields[5];
				$_SESSION["lasttime"] = $rst->fields[3];
				$logindate = date("Y-m-d H:i:s"); //当前登录时间
				$logincount = $rst->fields[4];
				$logincount++; //登录次数自增1
				$sqlstrud = "update tb_meeting_user set userLoginCount=$logincount, userLastLoginDate='$logindate' where userId=$_SESSION[id]";
				$conn->Execute($sqlstrud);
				echo "<meta http-equiv='refresh' content='2; url=manager.php' />";
				echo "<center><img src='images/loginwait.jpg' width='1003' height='636' /></center>";
			} elseif ($rst->fields[6] == 1) {
				echo "<script>alert('账户已被冻结！请联系管理员。'); history.go(-1);</script>";
			}
		} else {
			echo "<script>alert('密码错误！请重新登录。'); history.go(-1);</script>";
		}
	} else {
		echo "<script>alert('该用户名不存在！请重新登录。'); history.go(-1);</script>";
	}
}
?>