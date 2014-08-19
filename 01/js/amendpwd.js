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
	if (validate_required(thisform.newpwd, "请输入新密码！") == false) {
		return false;
	} else if (validate_required(thisform.newpwdtwice, "请确认新密码！") == false) {
		return false;
	} else if (thisform.newpwd.value != thisform.newpwdtwice.value) {
		alert("两次输入的密码不一致！");
		return false;
	} else {
		return true;
	}
}