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
	if (validate_required(thisform.olderpwd, "请输入原密码！") == false) {
		return false;
	} else {
		return true;
	}
}