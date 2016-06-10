//(function(){
	"use strict";
var input = document.getElementsByClassName("btn");
var operator = document.getElementsByClassName("operate");
console.log(operator)

var addInput = function () {
	var numberSelected = parseInt(this.getAttribute("data-value"));				
		if (true) {
			document.getElementById("leftScreen").value += numberSelected;
		} 
		}

var addOperate = function () {
	var operatorSelected = this.getAttribute("data-value");
		centerScreen.value = operatorSelected;
		}





	for ( var i = 0; i < input.length; i++) {
		if(!input[i].classList.contains('operate')) {
			input[i].addEventListener("click", addInput, false);
		} 
	}
	for ( var i = 0; i < operator.length; i++) {
	operator[i].addEventListener("click", addOperate, false)	
	}

//})();
