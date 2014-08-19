<?php 
//session_start();
include_once 'conn/conn.php';
echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
$meetingdate = $_POST['b_y'] . "-" . $_POST['b_m'] . "-" . $_POST['b_d'];
$id = $_POST["theid"];
$sqlstr = "update tb_meeting_info set meeting_name='$_POST[meeting_name]', meeting_department='$_POST[department]', meeting_place='$_POST[meetin_place]', meeting_date='$meetingdate', meeting_host='$_POST[meeting_host]', meeting_present='$_POST[meeting_present]', meeting_saver='$_POST[meeting_saver]', meeting_abstruct='$_POST[textarea]' where meeting_id=$id";
$rst_update = $conn->Execute($sqlstr);
if ($rst_update) {
	echo "<script>alert('修改成功！'); window.close();</script>";
} else {
	echo "<script>alert('修改失败！请重试。'); history.go(-1);</script>";
}
?>