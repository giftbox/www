<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/found.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/found.js"></script>
<title>无标题文档</title>
</head>
<body>
	<form id="found" action="manager.php?lmbs=查找会议结果" method="post" onsubmit="return check_submit(this)">
		<table border="0">
			<tr>
				<td align="center" colspan="2" height="32"><h3>查找会议记录</h3></td>
			</tr>
			<tr>
				<td height="26">查询内容：</td>
				<td>
					<input class="input_found" name="characters" type="text" />
				</td>
			</tr>
			<tr>
				<td height="26">查找类型：</td>
				<td align="left">
					<select class="select" name="findtype">
						<option value="">&lt;-查找类型-&gt;</option>
						<option value="1">会议编号</option>
						<option value="2">会议名称</option>
					</select>
				</td>
			</tr>
			<tr>
				<td height="26" colspan="3" align="center">
					<input class="found_btn" type="submit" value="" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>