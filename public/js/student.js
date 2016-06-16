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
$("#add-grade").attr("disabled", true);
$("#calculate-average").attr("disabled", true);

var canSubmit = false;
var buttonMod = function (event) {
	var i = $("#name");
	if (i.val().length > 0) {
		canSubmit = true;

	}
	if (canSubmit) {
		$("#add-grade").removeAttr("disabled");
		$("#calculate-average").removeAttr("disabled");
	}
}

var save = $("#save-name");
save.on("click", buttonMod);
		
// button disabler ^^^^^^^
//puts grade and subject in table
var pushGrade = function (){
	if ($("#subject").val() !== "" && $("#grade").val() !== "" ) {
		var subjects = $("#subject").val();
		var grades = parseInt($("#grade").val());
		student.addSubject(subjects, grades);
		var tableEntry = '<tr><td>' + subjects + '</td><td>' + grades + '</td></tr>'
		$("#grades").html(tableEntry + $("#grades").html());
		$("#subject").val("");
		$("#grade").val("");
	} 
	
}
//calculates and pushes average to table
var pushAverage = function (){
	var studentAverage = $("#student-average");

	studentAverage.html(student.calculateAverage());
	if (student.isAwesome()){
		$("#student-awesome").removeAttr("class")
	} else {
		$("#student-practice").removeAttr("class")
	}
	
}

//puts saved name at top of page
var pushName = function () {
	if ($("#name").val() !== "") {
		studentName.push($("#name").val());
		$("#student-name").html($("#name").val());
	}
}

var nameTop = $("#save-name")
nameTop.on("click", pushName);
var gradeAdd = $("#add-grade")
gradeAdd.on("click", pushGrade)
var subjectSave = $("#subject");
var average = $("#calculate-average")
average.on("click", pushAverage)



})();











