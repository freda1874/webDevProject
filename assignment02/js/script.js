/*
Correy Wilkinson
041091846
script.js
Lab 05
*/


function validateLogin () {

let userName = document.forms["login"]["userName"].value;
let password = document.forms["login"]["password"].value;


	function validateUserName() {

		if (userName.length == 0) {
			//make sure the user name is not empty
			document.getElementById("userNameError").innerHTML = "User Name should be non-empty, and within 20 characters long";
		} else if (userName.length >= 20) {
			//make sure the user name is less than 20 characters long
			document.getElementById("userNameError").innerHTML = "User Name should be non-empty, and within 20 characters long";
		} else {
			return true;
		}
	} //end validateUserName

	function validatePassword () {
		//first check if password 1 is not empty
		if (password.length == 0) {
			document.getElementById("passwordError").innerHTML = "Password should be at least 6 characters: 1 uppercase, 1 loweercase";
		//then check to make sure password2 is not empty
		} else if (passwordCheck.length == 0) {
			document.getElementById("passwordError").innerHTML = "Password should be at least 6 characters: 1 uppercase, 1 loweercase";
		//then check if password1 is less than 6, not need to check password2
		}else if (password.length  < 6) {
			document.getElementById("passwordError").innerHTML = "Password should be at least 6 characters: 1 uppercase, 1 loweercase";
		//then check if the passwords match
		} else if (password != passwordCheck) {
			document.getElementById("passwordError").innerHTML = "Passwords do not match!";
		//then check to see if there is an uppercase value in the password
		} else if (!hasUpperCase(password)) {
			document.getElementById("passwordError").innerHTML = "Password should be at least 6 characters: 1 uppercase, 1 loweercase";
		//then check if there is a lower case value in the password
		} else if (!hasLowerCase(password)) {
			document.getElementById("passwordError").innerHTML = "Password should be at least 6 characters: 1 uppercase, 1 loweercase";
		} else {
			document.getElementById("passwordError").innerHTML = "";
			return true;
		}
	} //end validatePassword


	if (validateUserName()) {
		console.log("User Name is Valid");
		document.getElementById("userNameError").innerHTML = "";
	} else {
		console.log("User Name is not valid");
		return false;
	}

	if (validatePassword()) {
		console.log("Password is Valid");
	} else {
		console.log("Password is not valid");
		return false;
	}

	if(document.forms["login"]["terms"].checked) {
		console.log("Terms is checked");
	} else {
		document.getElementById("termsError").innerHTML = "Please accept the terms and conditions, OR ELSE!";
		console.log("Terms is NOT checked");
		return false;
	}
} // end validate()




function validate () {

let email = document.forms["registration"]["email"].value;
let userName = document.forms["registration"]["userName"].value;
let password = document.forms["registration"]["password"].value;
let passwordCheck = document.forms["registration"]["passwordCheck"].value;
let terms = document.forms["registration"]["terms"].checked;

	function hasUpperCase (string) {
		const upperCaseCheck = /[A-Z]/;
		return upperCaseCheck.test(string);
	}

	function hasLowerCase (string) {
		const lowerCaseCheck = /[a-z]/;
		return lowerCaseCheck.test(string);
	}

	function validateEmail() {

		//declare a constant regular expression to check the email address against
		//should be in the format string@string.string
		const emailCheck = /\S+@\S+\.\S+/;
		//check the email address against the regular expression constant, return true or false
		return emailCheck.test(email);

	} //end validateEmail

	function validateUserName() {

		if (userName.length == 0) {
			//make sure the user name is not empty
			document.getElementById("userNameError").innerHTML = "User Name should be non-empty, and within 20 characters long";
		} else if (userName.length >= 20) {
			//make sure the user name is less than 20 characters long
			document.getElementById("userNameError").innerHTML = "User Name should be non-empty, and within 20 characters long";
		} else {
			return true;
		}
	} //end validateUserName

	function validatePassword () {
		//first check if password 1 is not empty
		if (password.length == 0) {
			document.getElementById("passwordError").innerHTML = "Password should be at least 6 characters: 1 uppercase, 1 loweercase";
		//then check to make sure password2 is not empty
		} else if (passwordCheck.length == 0) {
			document.getElementById("passwordError").innerHTML = "Password should be at least 6 characters: 1 uppercase, 1 loweercase";
		//then check if password1 is less than 6, not need to check password2
		}else if (password.length  < 6) {
			document.getElementById("passwordError").innerHTML = "Password should be at least 6 characters: 1 uppercase, 1 loweercase";
		//then check if the passwords match
		} else if (password != passwordCheck) {
			document.getElementById("passwordError").innerHTML = "Passwords do not match!";
		//then check to see if there is an uppercase value in the password
		} else if (!hasUpperCase(password)) {
			document.getElementById("passwordError").innerHTML = "Password should be at least 6 characters: 1 uppercase, 1 loweercase";
		//then check if there is a lower case value in the password
		} else if (!hasLowerCase(password)) {
			document.getElementById("passwordError").innerHTML = "Password should be at least 6 characters: 1 uppercase, 1 loweercase";
		} else {
			document.getElementById("passwordError").innerHTML = "";
			return true;
		}
	} //end validatePassword

	if (validateEmail()) {
		console.log("Email is Valid");
		document.getElementById("emailError").innerHTML = "";
	} else {
		console.log("Email is not valid");
		document.getElementById("emailError").innerHTML = "Email address should be non-empty with the format xyz@xyz.xyz";
		return false;
	}

	if (validateUserName()) {
		console.log("User Name is Valid");
		document.getElementById("userNameError").innerHTML = "";
	} else {
		console.log("User Name is not valid");
		return false;
	}

	if (validatePassword()) {
		console.log("Password is Valid");
	} else {
		console.log("Password is not valid");
		return false;
	}

	if(document.forms["registration"]["terms"].checked) {
		console.log("Terms is checked");
	} else {
		document.getElementById("termsError").innerHTML = "Please accept the terms and conditions, OR ELSE!";
		console.log("Terms is NOT checked");
		return false;
	}
} // end validate()