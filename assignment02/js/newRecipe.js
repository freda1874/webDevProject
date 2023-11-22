

function validateRecipe () {

let category = document.forms["addRecipe"]["category"].value;
let subCategory = document.forms["addRecipe"]["subCategory"].value;
let title = document.forms["addRecipe"]["title"].value;
let prepTime = document.forms["addRecipe"]["prepTime"].value;
let cookTime = document.forms["addRecipe"]["cookTime"].value;
let totalTime = document.forms["addRecipe"]["totalTime"].value;
let servings = document.forms["addRecipe"]["servings"].value;
//images is handled by the php code to check for valid files
let ingredients = document.forms["addRecipe"]["ingredients"].value;
let directions = document.forms["addRecipe"]["directions"].value;


	function validateCategory() {

		if (category == "") {
			//make sure the category is not empty
			document.getElementById("categoryError").innerHTML = "Please select a category";
		} else {
			return true;
		}
	} //end validateCategory

	function validateSubCategory() {

		if (subCategory == "") {
			//make sure the sub category is not empty
			document.getElementById("subCategoryError").innerHTML = "Please select a sub category";
		} else {
			return true;
		}
	} //end validateSubCategory

	function validateTitle() {

		if (title == "") {
			//make sure the title is not empty
			document.getElementById("titleError").innerHTML = "Please insert a title";
		} else {
			return true;
		}
	} //end validateTitle

	function validatePrepTime() {

		if (prepTime == "") {
			//make sure the prep time is not empty
			document.getElementById("prepTimeError").innerHTML = "Please enter a prep time";
		} else {
			return true;
		}
	} //end validatePrepTime

	function validateCookTime() {

		if (cookTime == "") {
			//make sure the cook time is not empty
			document.getElementById("cookTimeError").innerHTML = "Please enter a cook time";
		} else {
			return true;
		}
	} //end validateCookTime

	function validateTotalTime() {

		if (totalTime == "") {
			//make sure the total time is not empty
			document.getElementById("totalTimeError").innerHTML = "Please enter a total time";
		} else {
			return true;
		}
	} //end validateTotalTime

	function validateServings() {

		if (servings == "") {
			//make sure the servings is not empty
			document.getElementById("servingsError").innerHTML = "Please enter servings";
		} else {
			return true;
		}
	} //end validateServings

	function validateIngredients() {

		if (ingredients == "") {
			//make sure the ingredients is not empty
			document.getElementById("ingredientsError").innerHTML = "Please enter ingredients";
		} else if (ingredients.indexOf(",") == -1) {
			document.getElementById("ingredientsError").innerHTML = "Please separate ingredients by a comma for display purposes!";
		} else {
			return true;
		}
	} //end validateIngredients

	function validateDirections() {

		if (directions == "") {
			//make sure the directions is not empty
			document.getElementById("directionsError").innerHTML = "Please enter directions";
		} else {
			return true;
		}
	} //end validateDirections

	if (validateCategory()) {
		console.log("Category is Valid");
		document.getElementById("categoryError").innerHTML = "";
	} else {
		console.log("Category is not valid");
		return false;
	}

	if (validateSubCategory()) {
		console.log("Sub Category is Valid");
		document.getElementById("subCategoryError").innerHTML = "";
	} else {
		console.log("Sub Category is not valid");
		return false;
	}

	if (validateTitle()) {
		console.log("Title is Valid");
		document.getElementById("titleError").innerHTML = "";
	} else {
		console.log("Title is not valid");
		return false;
	}

	if (validatePrepTime()) {
		console.log("Prep Time is Valid");
		document.getElementById("prepTimeError").innerHTML = "";
	} else {
		console.log("Prep Time is not valid");
		return false;
	}

	if (validateCookTime()) {
		console.log("Cook Time is Valid");
		document.getElementById("cookTimeError").innerHTML = "";
	} else {
		console.log("Cook Time is not valid");
		return false;
	}

	if (validateTotalTime()) {
		console.log("Total Time is Valid");
		document.getElementById("totalTimeError").innerHTML = "";
	} else {
		console.log("Total Time is not valid");
		return false;
	}

	if (validateServings()) {
		console.log("Servings is Valid");
		document.getElementById("servingsError").innerHTML = "";
	} else {
		console.log("Servings is not valid");
		return false;
	}

	if (validateIngredients()) {
		console.log("Ingredients is Valid");
		document.getElementById("ingredientsError").innerHTML = "";
	} else {
		console.log("Ingredients is not valid");
		return false;
	}

	if (validateDirections()) {
		console.log("Directions is Valid");
		document.getElementById("directionsError").innerHTML = "";
	} else {
		console.log("Directions is not valid");
		return false;
	}


} // end validate()


