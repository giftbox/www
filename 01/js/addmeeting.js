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
	if (validate_required(thisform.meeting_name, "会议名称不能为空！") == false) {
		return false;
	} else if (validate_required(thisform.department, "会议部门不能为空！") == false) {
		return false;
	} else if (validate_required(thisform.meetin_place, "会议地点不能为空！") == false) {
		return false;
	} else if (validate_required(thisform.meeting_host, "会议主持人不能为空！") == false) {
		return false;
	} else if (validate_required(thisform.meeting_saver, "会议记录人不能为空！") == false) {
		return false;
	} else if (validate_required(thisform.meeting_present, "出席人员不能为空！") == false) {
		return false;
	} else if (validate_required(thisform.textarea, "会议摘要不能为空！") == false) {
		return false;
	} else {
		return true;
	}
}