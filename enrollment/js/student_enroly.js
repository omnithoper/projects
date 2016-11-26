function checkSubjectName() {
	
	var subjectName = document.getElementById('subject_list').value;


	if (subjectName == '(Select Subject)') {
		console.log('Select a Subject');
		return false;
	} else {
		console.log('EVERYTHING IS OK!!!');
		document.getElementById('button_save').disabled = false;
		return true;
	}
	
}

document.onload = function(){
checkInput();
};