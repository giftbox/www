<?php 
session_start();
include_once 'conn/conn.php';
echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
$selectType = $_POST["select_action"];
if ($selectType == "删除账户") {
	$sqlstr = "delete from tb_meeting_user where userId=$_POST[select_id]";
	if ($_POST["select_id"] != 1 && $_POST["select_id"] != $_SESSION["id"]) {
		$del_rst = $conn->Execute($sqlstr);
		if ($del_rst) {
			echo "<script>alert('删除成功！'); history.go(-1);</script>";
		} else {
			echo "<script>alert('删除失败！'); history.go(-1);</script>";
		}
	} else {
		echo "<script>alert('该账户禁止被操作！'); history.go(-1);</script>";
	}
}
if ($selectType == "冻结账户") {
	$sqlstr = "update tb_meeting_user set userWhether=1 where userId=$_POST[select_id]";
	if ($_POST["select_id"] != 1) {
		$del_rst = $conn->Execute($sqlstr);
		if ($del_rst) {
			echo "<script>alert('已成功冻结！'); history.go(-1);</script>";
		} else {
			echo "<script>alert('操作失败！'); history.go(-1);</script>";
		}
	} else {
		echo "<script>alert('该账户禁止被操作！'); history.go(-1);</script>";
	}
}
if ($selectType == "解冻账户") {
	$sqlstr = "update tb_meeting_user set userWhether=0 where userId=$_POST[select_id]";
	if ($_POST["select_id"] != 1) {
		$del_rst = $conn->Execute($sqlstr);
		if ($del_rst) {
			echo "<script>alert('已成功解冻！'); history.go(-1);</script>";
		} else {
			echo "<script>alert('操作失败！'); history.go(-1);</script>";
		}
	} else {
		echo "<script>alert('该账户禁止被操作！'); history.go(-1);</script>";
	}
}
if ($selectType == "设置权限") {
	$sqlstr = "update tb_meeting_user set userRights=1 where userId=$_POST[select_id]";
	if ($_POST["select_id"] != 1 && $_POST["select_id"] != $_SESSION["id"]) {
		$del_rst = $conn->Execute($sqlstr);
		if ($del_rst) {
			echo "<script>alert('设置成功！该用户已成为管理员。'); history.go(-1);</script>";
		} else {
			echo "<script>alert('操作失败！'); history.go(-1);</script>";
		}
	} else {
		echo "<script>alert('该账户禁止被操作！'); history.go(-1);</script>";
	}
}
if ($selectType == "取消权限") {
	$sqlstr = "update tb_meeting_user set userRights=0 where userId=$_POST[select_id]";
	if ($_POST["select_id"] != 1 && $_POST["select_id"] != $_SESSION["id"]) {
		$del_rst = $conn->Execute($sqlstr);
		if ($del_rst) {
			echo "<script>alert('取消成功！该用户已被取消管理员。'); history.go(-1);</script>";
		} else {
			echo "<script>alert('操作失败！'); history.go(-1);</script>";
		}
	} else {
		echo "<script>alert('该账户禁止被操作！'); history.go(-1);</script>";
	}
}
?>