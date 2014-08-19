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
	if (validate_required(thisform.departname, "请输入部门名称！") == false) {
		return false;
	} else {
		return true;
	}
}