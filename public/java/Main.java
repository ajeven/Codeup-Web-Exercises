public class Main {
	public static void main(String[] args) {
		System.out.println('Hello, Lassen');
	}

	//Although Java is object oriented, not all types are objects. variables are called primitives.
	// Here is a list of primitives in Java
	// byte (number, 1 byte)
	// short (number, 2 bytes)
	// int (number, 4 bytes)
	// long (number, 8 bytes)
	// float (float number, 4 bytes)
	// double (float number, 8 bytes)
	// char (a character, 2 bytes)
	// boolean (true or false, 1 byte)
	// Java is a strong typed language, which means variables need to be defined before we use them.
	int numberVar = 5;

	double i = 4.5;
	i = 3.0;

	float f = (float) 4.5; //or
	float f = 4.5f //f behind the number is shorthand for type casting float

	char c = 'g';

	String s1 = "A Tisket, a tasket";
	String s2 = "look at my cool basket";
	String s3 = s1 + s2;

	String s = "I have " + num + " cookies"; //Be sure not to use "" with primitives.

	boolean b = false;
	b = true;

	boolean toBe = false;
	b = toBe || !toBe;
	if (b) {
	    System.out.println(toBe);
	}

}