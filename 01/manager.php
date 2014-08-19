<?php
	session_start();
	include_once 'conn/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/manager.css" type="text/css" rel="stylesheet" />
<title>会议管理系统</title>
</head>
<?php 
	if (empty($_SESSION["name"]) and empty($_SESSION["id"])) { //判断当前是否登录
		echo "<meta http-equiv='refresh' content='0; url=login.php' />";
		echo "<script>alert('请登录后再执行操作！');</script>";
	} else {
?>
<body>
	<div class="wrapper">
		<div class="header">
			<img src="images/Title.png" alt="" width="960" height="106" />
		</div>
		<div class="userinfo">
			<?php
				include 'userinfo.php';
			?>
		</div>
		<div class="main">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td width="182"><div class="leftbox">
						<center>
							<h4 class="h4">分类操作</h4>
							<ul>
								<li><a href="manager.php?lmbs=添加会议记录">&nbsp;&nbsp;添加会议记录</a></li>
								<li><a href="manager.php?lmbs=浏览会议记录">&nbsp;&nbsp;浏览会议记录</a></li>
								<li><a href="manager.php?lmbs=查找会议记录">&nbsp;&nbsp;查找会议记录</a></li>
								<li><a href="manager.php?lmbs=管理用户信息">&nbsp;&nbsp;管理用户信息</a></li>
							</ul>
							<p>&nbsp;</p>
							<?php 
								if ($_SESSION["rights"] == 1) { //仅对管理员显示
							?>
							<h4 class="h4style">管理操作</h4>
							<ul>
								<li class="uli"><a href="manager.php?lmbs=用户账户管理">&nbsp;&nbsp;用户账户管理</a></li>
								<li class="uli"><a href="manager.php?lmbs=会议信息管理">&nbsp;&nbsp;会议信息管理</a></li>
								<li class="uli"><a href="manager.php?lmbs=部门管理">&nbsp;&nbsp;部门管理&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
							</ul>
							<?php 
								}
							?>
						</center>
					</div></td> 
					<td width="780">
						<div class="rightbox">
							<div class="position">当前位置&nbsp;&gt;&gt;
								<?php 
									if (empty($_GET["lmbs"])) {
										echo "首页";	
										$lmbs = "";
									} else {
										echo $_GET["lmbs"];
										$lmbs = $_GET["lmbs"];
									}
								?>							
							</div>
							<div class="include">
								<?php
									switch ($lmbs) {
										case "添加会议记录": include 'addmeeting.php'; break;
										case "浏览会议记录": include 'viewmeeting.php'; break;
										case "查找会议记录": include 'found.php'; break;
										case "修改密码": include 'amendpwd.php'; break;
										case "查找会议结果": include 'show.php'; break;
										case "管理用户信息": include 'amendinfo.php'; break;
										case "": include 'welcome.php'; break;
										//管理员模式选项
										case "用户账户管理": include 'acc_manager.php'; break;
										case "会议信息管理": include 'recordmanager.php'; break;
										case "部门管理": include 'departmanager.php'; break;
									}
								?>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="footer">
			<?php
				include 'footer.php';
			?>
		</div>
	</div>
</body>
<?php
	}
?>
</html>