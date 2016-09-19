"use strict";


function reverse() {

	var numbers = ['1', '2', '3', '4', '5'];
    var revNumbers = [];

    for (var i = numbers.length-1; i >= 0; i--){
      revNumbers.push(numbers[i])
    } 
    return revNumbers;
}	
console.log(reverse());

function ucwords(str) {
	var splitStr = str.toLowerCase().split(' ');
	    for (var i = 0; i < splitStr.length; i++) {
	    	splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);     
	    }
	    return splitStr.join(' '); 
}

console.log(ucwords("please excuse my dear aunt sally"));

// var i = (70 + 80 + 95) / 3; 

// if(i >= 80) {
// 	console.log("You're Awesome!");
// } else {
// 	console.log("You need more practice");
// } 

// var cameron = 180;
// var ryan = 250;
// var george = 320;
// var discount = .65;
// var newTotal;

// if (cameron >=200) {
// 	newTotal = cameron * discount;
// 	console.log("Cameron's total is $" + newTotal + "." );
// }	else if (cameron < 200) {
// 	newTotal = 200 - cameron;
// 	console.log("Cameron needs to spend $" + newTotal + " more." );
// }

// if (ryan >=200) {
// 	newTotal = ryan * discount;
// 	console.log("Ryan's total is $" + newTotal + "." );
// }	else if (ryan < 200) {
// 	newTotal = 200 - ryan;
// 	console.log("Ryan needs to spend $" + newTotal + " more." );
// }

// if (george >=200) {
// 	newTotal = george * discount;
// 	console.log("George's total is $" + newTotal + "." );
// }	else if (george < 200) {
// 	newTotal = 200 - george;
// 	console.log("George needs to spend $" + newTotal + " more." );
// }



// var flipACoin = Math.floor(Math.random()* 2)

// // if (flipACoin) {
// // 	//console.log("Buy a car.")
// // } else {
// // 	//console.log("Buy a house.")
// // }

// console.log (flipACoin = Math.floor(Math.random()* 2) ? "Buy a car." : "Buy a house.");