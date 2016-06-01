"use strict";
 
var i = (70 + 80 + 95) / 3; 

if(i >= 80) {
	console.log("You're Awesome!");
} else {
	console.log("You need more practice");
} 

var cameron = 180;
var ryan = 250;
var george = 320;
var discount = .65;
var newTotal;

if (cameron >=200) {
	newTotal = cameron * discount;
	console.log("Cameron's total is $" + newTotal + "." );
}	else if (cameron < 200) {
	newTotal = 200 - cameron;
	console.log("Cameron needs to spend $" + newTotal + " more." );
}

if (ryan >=200) {
	newTotal = ryan * discount;
	console.log("Ryan's total is $" + newTotal + "." );
}	else if (ryan < 200) {
	newTotal = 200 - ryan;
	console.log("Ryan needs to spend $" + newTotal + " more." );
}

if (george >=200) {
	newTotal = george * discount;
	console.log("George's total is $" + newTotal + "." );
}	else if (george < 200) {
	newTotal = 200 - george;
	console.log("George needs to spend $" + newTotal + " more." );
}



var flipACoin = Math.floor(Math.random()* 2)

// if (flipACoin) {
// 	//console.log("Buy a car.")
// } else {
// 	//console.log("Buy a house.")
// }

console.log (flipACoin = Math.floor(Math.random()* 2) ? "Buy a car." : "Buy a house.");