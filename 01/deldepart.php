<?php 
//session_start();
include_once 'conn/conn.php';
echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
$id = $_GET["id"];
$sqlstr = "delete from tb_meeting_depart where department_id=$id";
$dd_rst = $conn->Execute($sqlstr);
if ($dd_rst) {
	echo "<script>alert('删除成功！'); history.go(-1);</script>";
} else {
	echo "<script>alert('删除失败！请重试。'); history.go(-1);</script>";
}
?>