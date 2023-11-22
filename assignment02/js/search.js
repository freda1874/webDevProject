/*
Correy Wilkinson
041091846
script.js
Lab 05
*/


function validateSearch () {

let search = document.forms["search"]["search"].value;

	function validateSearch() {

		if (search.length == 0) {
			//make sure the search is not empty
			document.getElementById("searchError").innerHTML = "Please enter a search criteria";
		} else {
			return true;
		}
	} //end validateUserName

	if (validateSearch()) {
		console.log("Search is Valid");
	} else {
		console.log("Search is not valid");
		return false;
	}


} // end validate()



