(function() {
"use strict"
var studentName =[];
var student = {
	awesomeGrade: 80,
	name: null,
	subjects: [],
	calculateAverage: function () {
		var average = 0;
		this.subjects.forEach(function (subject) {
			average += subject.grade;
		});
		return average / this.subjects.length;
	},
	addSubject: function (name, grade) {
		var subject = {
			name: name,
			grade: grade
		};
		this.subjects.push(subject);
	},
	isAwesome: function () {
		return this.calculateAverage() > this.awesomeGrade;
	}
};
//Disable buttons untill Name is saved
document.getElementById("add-grade").setAttribute("disabled", true);
document.getElementById("calculate-average").setAttribute("disabled", true);

var canSubmit = false;
var buttonMod = function (event) {
	var i = document.getElementById("name");
	if (i.value.length > 0) {
		canSubmit = true;

	}
	if (canSubmit) {
		document.getElementById("add-grade").removeAttribute("disabled");
		document.getElementById("calculate-average").removeAttribute("disabled");
	}
}

var save = document.getElementById("save-name");
save.addEventListener("click", buttonMod, false);
		
// button disableer ^^^^^^^
//puts grade and subject in table
var pushGrade = function (){
	if (document.getElementById("subject").value !== "" && document.getElementById("grade").value !== "" ) {
		var subjects = document.getElementById("subject").value;
		var grades = Number(document.getElementById("grade").value);
		student.addSubject(subjects, grades);
		var tableEntry = '<tr><td>' + subjects + '</td><td>' + grades + '</td></tr>'
		document.getElementById("grades").innerHTML = tableEntry + document.getElementById("grades").innerHTML
		document.getElementById("subject").value = "";
		document.getElementById("grade").value = "";
	} 
	
}
//calculates and pushes average to table
var pushAverage = function (){
	var studentAverage = document.getElementById("student-average");

	studentAverage.innerHTML = student.calculateAverage();
	if (student.isAwesome()){
		document.getElementById("student-awesome").removeAttribute("class")
	} else {
		document.getElementById("student-practice").removeAttribute("class")
	}
	
}

//puts saved name at top of page
var pushName = function () {
	if (document.getElementById("name").value !== "") {
		studentName.push(document.getElementById("name").value);
		document.getElementById("student-name").innerHTML = document.getElementById("name").value;
	}
}

var nameTop = document.getElementById("save-name")
nameTop.addEventListener("click", pushName, false);
var gradeAdd = document.getElementById("add-grade")
gradeAdd.addEventListener("click", pushGrade, false)
var subjectSave = document.getElementById("subject");
var average = document.getElementById("calculate-average")
average.addEventListener("click", pushAverage, false)



})();











