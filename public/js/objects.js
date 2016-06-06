(function(){
    "use strict";

    // TODO: Create person object
    // var person = todo;
    	var person = {
		// TODO: Create firstName and lastName properties in your person object; assign your name to them
			first_name: "Bob",
			last_name: "Dole"
		}
    	// TODO: Add a sayHello method to the person object that
    	//       alerts a greeting using the firstName and lastName properties
    		person.sayHello = function(){
    			alert("Hello, my name is " + this.first_name + " " + this.last_name)
    		}


			
    // Say hello from the person object.
    person.sayHello();
})();
