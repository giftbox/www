<?php
session_start();
//判断当前登录状态
if (isset($_SESSION['name']) and isset($_SESSION['id']) and isset($_SESSION['rights'])) {
	echo "<meta http-equiv='refresh' content='0; url=manager.php' />";
} else {
	echo "<meta http-equiv='refresh' content='0; url=login.php' />";
}
?>