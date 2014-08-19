function validate_required(field, alertxt) {
	if (field.value == null || field.value == "") {
		alert(alertxt);
		field.focus();
		return false;
	} else {
		return true;
	}
}

function check_submit(thisform) {
	if (validate_required(thisform.newuser, "用户名不能为空！") == false) {
		return false;
	} else if (validate_required(thisform.department, "会议部门不能为空！") == false) {
		return false;
	} else if (validate_required(thisform.newpwd, "密码不能为空！") == false) {
		return false;
	} else if (validate_required(thisform.newpwdtwice, "确认密码不能为空！") == false) {
		return false;
	} else if (thisform.newpwd.value != thisform.newpwdtwice.value) {
		alert("两次输入的密码不一致！");
		return false;
	} else {
		return true;
	}
}