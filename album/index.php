<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link type="text/css" rel="stylesheet" href="css/index.css" />
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<title>我的相册</title>
</head>
<body id="droptarget" class="all_album"  onresize="justify_list()">
	<header class="header">
		<h1 class="logo">LOGO</h1>
		<div class="title_bar">
			<ul>
				<li>
					<a href="javascript:void(0);">我的相册</a>
				</li>
				<li>
					<a href="javascript:void(0);">图片广场</a>
				</li>
				<li>
					<a href="javascript:void(0);">我的关注</a>
				</li>
				<li>
					<a href="javascript:void(0);">群相册</a>
				</li>
			</ul>
		</div>
		<div class="search">
			<a href="javascript:void(0);"></a>
			<input type="text" />
		</div>
		<div class="more_operation">
			<a href="javascript:void(0);" class="user_email"></a>
			<a href="javascript:void(0);" class="user_avater"></a>
			<ul class="user_menu">
				<li class="nickname">兰博基尼</li>
				<li class="list_text">
					<span class="left_label">电子邮箱</span>
					xxx@126.com
				</li>
				<li class="divider"></li>
				<li class="list_btn">
					<a href="javascript:void(0);">管理我的账户</a>
				</li>
				<li class="list_btn">
					<a href="javascript:void(0);">会员中心</a>
				</li>
				<li class="divider"></li>
				<li class="list_btn">
					<a href="javascript:void(0);">登出</a>
				</li>
			</ul>
			<span></span>
		</div>
	</header>
	<div class="user_info">
		<div class="user_photo">
			<img src="images/user_photo.png" alt="头像" />
		</div>
		<div class="main_info">
			<div id="user_name">
				<h1>兰博基尼</h1>
				<ul>
					<li>
						<p>12</p>
						<p>关注</p>
					</li>
					<li>
						<p>0</p>
						<p>粉丝</p>
					</li>
					<li class="right_separate_none">
						<p>86</p>
						<p>照片</p>
					</li>
				</ul>
			</div>
			<div id="upload_btn">
				<a class="blue_btn" href="javascript:void(0);">上传照片</a>
			</div>
		</div>
		<div class="navigation_bar">
			<ul>
				<li>
					<a href="javascript:void(0);">相册</a>
				</li>
				<li>
					<a href="javascript:void(0);">标签</a>
				</li>
				<li>
					<a href="javascript:void(0);">时光轴</a>
				</li>
				<li>
					<a href="javascript:void(0);" class="right_separate_none">喜欢</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div id="create_album">
			<a class="white_btn" href="javascript:void(0);">创建相册</a>
		</div>
		<div id="show_all_album" class="clearfix">
		</div>
	</div>
	<footer class="footer">
		<div class="contact_bar">
		版权所有
		</div>
		<div class="copyright">
		版权所有
		</div>
	</footer>
	<script type="text/javascript" src="js/loadcover.js"></script>
	<script type="text/javascript" src="js/scrollfixeddiv.js"></script>
	<script type="text/javascript" src="js/header-operation.js"></script>
</body>
</html>