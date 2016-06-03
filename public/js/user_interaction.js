"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.

do {
	var input = prompt("Hello, What is your name?")
} while(input === "");
console.log(input);
// TODO: Show an alert message that welcomes the user based on their input.
alert("Nice to meet you " + input + ", my name is Javascript.");
// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.
var pizza = confirm("Do you enjoy eating pizza?");
	if (pizza) {
		alert("Pizza is great");
	} else {
		alert("You are crazy! pizza is the best.");
	}

	


