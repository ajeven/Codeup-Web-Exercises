(function(){
	"use strict";
var input = document.getElementsByClassName("btn");
var operator = document.getElementsByClassName("operate");
var clearScreen = document.getElementById("clear");
var calculate = document.getElementById("solve");
var decimal = document.getElementById("period")
var backSpace = document.getElementById("back")
var operatorSelected;
var addInput = function () {
	var numberSelected = this.getAttribute("data-value");				
		if (centerScreen.value == "") {
			document.getElementById("leftScreen").value += numberSelected;
		} 
		else {
			document.getElementById("rightScreen").value += numberSelected;
		}
}	
var addOperate = function () {
	 operatorSelected = this.getAttribute("data-value");
	centerScreen.value = operatorSelected;
}
var addDecimal = function() {
	if (centerScreen.value == "" && leftScreen.value.indexOf(".") == -1) {
		leftScreen.value += ".";
	} 
	if (centerScreen.value !== "" && rightScreen.value.indexOf(".") == -1) {
		rightScreen.value += ".";
	}
}
var backOne = function() {
	if(centerScreen.value == "" && leftScreen.value !== "") {
		leftScreen.value = leftScreen.value.substring(0, leftScreen.value.length - 1);
	} 
	else if (rightScreen.value !== "" && centerScreen.value !== "") {
		rightScreen.value = rightScreen.value.substring(0, rightScreen.value.length -1);
	}
	else if (leftScreen.value !== "" && centerScreen.value !== "") {
		centerScreen.value = "";
	}
}
var solution = function () {
	if (centerScreen.value == "+") {
		leftScreen.value = (parseFloat(leftScreen.value)) + (parseFloat(rightScreen.value));
		centerScreen.value = null;
		rightScreen.value = null;
	} else if (centerScreen.value == "-"){
		leftScreen.value = (parseFloat(leftScreen.value)) - (parseFloat(rightScreen.value));
		centerScreen.value = null;
		rightScreen.value = null;
	} else if (centerScreen.value == "x") {
		leftScreen.value = (parseFloat(leftScreen.value)) * (parseFloat(rightScreen.value));
		centerScreen.value = null;
		rightScreen.value = null;
	} else if (centerScreen.value == "/" && rightScreen.value == 0) {
		leftScreen.value = "im going";
		centerScreen.value = "to";
		rightScreen.value = "break";
	} else if (centerScreen.value == "/") {
		leftScreen.value = (parseFloat(leftScreen.value)) / (parseFloat(rightScreen.value));
		centerScreen.value = null;
		rightScreen.value = null;
	} 	
}
var clearAreas = function (){
	leftScreen.value = null;
	centerScreen.value = null;
	rightScreen.value = null;
}
	calculate.addEventListener("click", solution, false)
	backSpace.addEventListener("click", backOne, false)
	for ( var i = 0; i < input.length; i++) {
		if(!input[i].classList.contains('operate')) {
			input[i].addEventListener("click", addInput, false);
		} 
	}
	for ( var i = 0; i < operator.length; i++) {
	operator[i].addEventListener("click", addOperate, false)	
	}
	clearScreen.addEventListener("click", clearAreas, false)
	decimal.addEventListener("click", addDecimal, false)
})();
