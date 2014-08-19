function validate_required(field, alertxt) {
	if (field.value == null || field.value == "") {
		alert(alertxt);
		field.focus();
		return false;
	} else {
		return true;
	}
}

function validate_form(thisform) {
	if (validate_required(thisform.username, "用户名不能为空！") == false) {
		return false;
	} else if (validate_required(thisform.pass, "密码不能为空！") == false) {
		return false;
	} else {
		return true;
	}
}