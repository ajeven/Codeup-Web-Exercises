var customerName = [];

var summerSale = {
	continueOrNot : function () {
		do {
			var customer = {
				productName : [],
				productPrice : [],
				productQuery : function () {
					do {
						this.productName.push(prompt("Product name?"));
						this.productPrice.push(prompt("Product price?"));
						var cancel = confirm("More products?");
					} while (cancel);
				},
			
				priceSum : function () {
					var totalPrice = 0;
					for (i = 0; i < this.productName.length; i++) {
						totalPrice = totalPrice + Number(this.productPrice[i]);
					} 
					return totalPrice;
				},

				discount : function (totalPrice) {
					var discountPrice = 0;		
					if (totalPrice >= 200) {
						discountPrice = totalPrice * .65;
						return discountPrice;
					} 
					return totalPrice;
				},
			};
			customerName.push(prompt("What is the customer's name?"));
			customer.productQuery();
			console.log("$" + customer.priceSum() + " price before discount.");
			console.log("$" + customer.discount(customer.priceSum()) + " price after discount.");				
			console.table(customer.productName);
			console.table(customer.productPrice);
			var cancel = confirm("Would you like to repeat this process for another customer?");
		} while (cancel);	
	}
};

summerSale.continueOrNot();




