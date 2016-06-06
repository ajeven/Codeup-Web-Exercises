(function() {
	"use strict";

	// create a circle object
	var circle = {
		radius: 3,
	
		getArea: function () {
			// TODO: complete this method
			// hint: area = pi * radius^2
			var area = Math.PI * Math.pow(3, 2)
			return area; // TODO: return the proper value
				
		},

		logInfo: function (doRounding) {
			// TODO: complete this method.
			// If doRounding is true, round the result to the nearest integer.
			// Otherwise, output the complete value
				var area = this.getArea()
			if (doRounding == true) {
				area = Math.round(area);

				
			} 
			console.log("This is the area rounded to the nearest interger: " + area)
		}
	};

	// log info about the circle
	console.log("Raw circle information");
	circle.logInfo(false);
	console.log("Circle information rounded to the nearest whole number");
	circle.logInfo(true);

	console.log("=======================================================");
	// TODO: Change the radius of the circle to 5.

		// create a circle object
	var circle = {
		radius: 5,
	
		getArea: function () {
			// TODO: complete this method
			// hint: area = pi * radius^2
			var area = Math.PI * Math.pow(5, 2)
			return area; // TODO: return the proper value
				
		},

				logInfo: function (doRounding) {
			// TODO: complete this method.
			// If doRounding is true, round the result to the nearest integer.
			// Otherwise, output the complete value
			var area = this.getArea()
			if (doRounding == true) {
				area = Math.round(area)
				
			} 
			console.log("This is rounded to the nearest interger: " + area);
		}
	};
	// log info about the circle
	console.log("Raw circle information");
	circle.logInfo(false);
	console.log("Circle information rounded to the nearest whole number");
	circle.logInfo(true);
})();
