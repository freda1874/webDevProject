/*
Correy Wilkinson
041091846
script.js
Lab 05
*/


function validateLogin () {

let userName = document.forms["login"]["userName"].value;
let password = document.forms["login"]["password"].value;

	function hasUpperCase (string) {
		const upperCaseCheck = /[A-Z]/;
		return upperCaseCheck.test(string);
	}

	function hasLowerCase (string) {
		const lowerCaseCheck = /[a-z]/;
		return lowerCaseCheck.test(string);
	}

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
		//then check if password1 is less than 6, not need to check password2
		}else if (password.length  < 6) {
			document.getElementById("passwordError").innerHTML = "Password should be at least 6 characters: 1 uppercase, 1 loweercase";
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

} // end validate()



