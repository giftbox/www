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
	if (validate_required(thisform.characters, "查询条件不允许为空！") == false) {
		return false;
	} else if (validate_required(thisform.findtype, "请选择查找类型！") == false) {
		return false;
	} else if (isNaN(thisform.characters.value) && thisform.findtype.value == 1) {
		alert("按会议编号查找，请输入数字！");
		thisform.characters.value = "";
		return false;
	} else {
		return true;
	}
}