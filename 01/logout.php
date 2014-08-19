<?php 
	session_start();
	session_destroy();
?>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<script type="text/javascript">
	alert("已经安全退出！");
	location = "index.php";
</script>