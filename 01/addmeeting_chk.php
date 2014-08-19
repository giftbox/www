<?php
session_start();
include_once 'conn/conn.php';

//定义上传文件格式
function f_postfix() {
	if ($_FILES["meeting_documents"]["type"] == "text/plain") {
		return true;
	} else {
		return false;
	}
}

echo "<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />";
if ($_FILES["meeting_documents"]["size"] <= 0) {
	echo "<script>alert('请上传文件！'); history.go(-1);</script>"; //判断是否选择了文件
} else {
	if (f_postfix() == true) {
		if ($_FILES["meeting_documents"]["size"] > 0 and $_FILES["meeting_documents"]["size"] < 1000000) {
			$meetingdate = $_POST['b_y'] . "-" . $_POST['b_m'] . "-" . $_POST['b_d'];
			$filepath = "upfile\\" . time() . ".txt"; //定义上传文件存放位置
			$sqlstr = "insert into tb_meeting_info (meeting_name, meeting_department, meeting_place, meeting_date, meeting_host, meeting_present, meeting_saver, meeting_abstruct, meeting_address) values ('$_POST[meeting_name]', '$_POST[department]', '$_POST[meetin_place]', '$meetingdate', '$_POST[meeting_host]', '$_POST[meeting_present]', '$_POST[meeting_saver]', '$_POST[textarea]', '$filepath')";
			$a_rst = $conn->Execute($sqlstr);
			if ($a_rst == true) {
				move_uploaded_file($_FILES["meeting_documents"]["tmp_name"], $filepath); //将临时文件保存到指定位置
				echo "<script>alert('添加成功！'); history.go(-1);</script>";
			} else {
				echo "<script>alert($conn->ErrorMsg()); history.go(-1);</script>"; //添加失败则打印错误
			}
		} else {
			echo "<script>alert('上传文件大小超过 1M'); history.go(-1);</script>";
		}
	} else {
		echo "<script>alert('上传只支持 txt 格式文件！'); history.go(-1);</script>";
	}
}






?>