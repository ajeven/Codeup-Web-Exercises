(function(){
    "use strict";

    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
    var names = ["Alan", "Rob", "Cameron", "Luis"];

    // TODO: Create a log statement that will log the number of elements in the names array.
    for (var i = 0; i < names.length; i++) {
    	console.log ("The name at index " + i + " is " + names[i]);
    }

    names.forEach(function(element, index, array) {
    // TODO: Create log statements that will print each of the names array elements individually.
    	console.log ("The name at index " + index + " is " + array[index]);
  	});
})();









// Open the iterating.js file that you created in the last lesson.
// Modify the code that logs the names array elements individually to instead use a for loop.
// Below the for loop, use a forEach loop to print the names again.
// View the results in your browser to test for the expected output.
// Finally, save your work, commit the changes to your git repository, and push to GitHub.