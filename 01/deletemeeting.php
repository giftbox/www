<?php 
session_start();
include_once 'conn/conn.php';
echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
$sqlstr = "delete from tb_meeting_info where meeting_id=$_GET[id]";
$rst_del = $conn->Execute($sqlstr);
if ($rst_del) {
	echo "<script>alert('删除成功！'); history.go(-1);</script>";
} else {
	echo "<script>alert('删除失败！请重试。'); history.go(-1);</script>";
}
?>