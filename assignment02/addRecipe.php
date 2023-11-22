<?php
session_start();

//check to make sure admin is logged in, if not send them away
if ($_SESSION['user'] !== 'Administrator') {
  header("Location: default.php");
}
?>

<!--
Correy Wilkinson 041091846
Lei Luo 041068533
Emmah Gichia 041085709
Etieno Josiah 041080380
Christy Guan 041002854

Assignment 2
Due August 4, 2023
viewRecipe.php
-->

<?php
//get the category passed in by link
//$recipe = $_GET['recipe'];
//$category = $_GET['cat'];
//echo $recipe . "<br>";

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Correy Wilkinson 041091846">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" type="text/css" href="css/assignment02.css">
		<title>Traditional Recipes</title>
		<script src="js/search.js" defer></script>	
		<script src="js/newRecipe.js" defer></script>		
	</head>
	<body>
		<div class="mainContainer">
			<header>
				<div class="headerContainer">
					<div class="title-box">
						<h1 class="pinkWhiteBg"><a class="pink" href="default.php">Traditional Recipes</a></h1>
					</div>
					<div class="search-box">
						<form name="search" action="search.php" method="get" onsubmit="return validateSearch()">
							<input type="text" name="search" placeholder="Search by title">
							<input type="submit" value="SEARCH">
						</form>	
						<div class="error" name="searchError" id="searchError"></div>						
					</div>
					
					<?php
					if (!isset($_SESSION['user'])) { ?>
					<div class="login-box">
						<p class="pinkWhiteBg">
							<a class="pink" href="login.php">Login</a><br><br><a class="pink" href="newUser.php">Sign Up</a>
						</p>					

					</div>						
					<?php } ?>
					<?php
					if (isset($_SESSION['user'])) { ?>
					<div class="login-box">
						<p class="pinkWhiteBg"><?php echo $_SESSION['user']; ?><a class="pink" href="processLogout.php"> - logout</a></p>
					</div>						
					<?php } ?>
					<?php
					if ($_SESSION['user'] == "Administrator") { ?>
					<div class="login-box">
						<p class="pinkWhiteBg"><?php echo $_SESSION['user']; ?><a class="pink" href="admin.php"> - Control Panel</a></p>
						<p class="pinkWhiteBg"><a class="pink" href="processLogout.php">logout</a></p>
					</div>						
					<?php } ?>					
				</div>
				<nav class="container">			
					<div class="item">
						<h2><a href="viewCategory.php?cat=African">African</a></h2>
					</div>
					<div class="item">
						<h2><a href="viewCategory.php?cat=Chinese">Chinese</a></h2>						
					</div>
					<div class="item">
						<h2><a href="viewCategory.php?cat=Japanese">Japanese</a></h2>					
					</div>					
				</nav>					
			</header>
			<main>
				<div class="cardContainer">
					<div class="center">	
						<h3 class="center"><a class="pink" href="admin.php">Return to control panel</a></h3>									
					</div>
				</div>			
				<div class="cardContainer">				
					<div class="singleRecipeContainer">
					<h2 class="red">Please enter recipe information below</h2>
					<form name="addRecipe" method="post" action="processAddRecipe.php" enctype="multipart/form-data" onsubmit="return validateRecipe()">
						
						<p>
							<label for="category">Category</label>
						</p>
						<p>
							<select name="category" id="category">
								<option value="">Please Select a Category</option>
								<option value="Chinese">Chinese</option>
								<option value="African">African</option>
								<option value="Japanese">Japanese</option>
							</select>
						</p>

							<div id="categoryError" class="error"></div>	

						<p>
							<label for="subCategory">Sub Category</label>
						</p>						
						<p>
							<select name="subCategory" id="subCategory">
								<option value="">Please Select a Sub Category</option>
								<option value="MainDishes">Main Dishes</option>
								<option value="Breakfast">Breakfast</option>
								<option value="Snacks">Snacks</option>
							</select>
						</p>
						<div id="subCategoryError" class="error">
						</div>						
						<p>
							<label for="title">Title</label>
						</p>
						<p>
							<input type="text" placeholder="Title" name="title" id="title" size="50">
						</p>
						<div id="titleError" class="error">
						</div>
						
						<p>
							<label for="prepTime">Prep Time</label>
						</p>
						<p>
							<input type="text" placeholder="Prep Time" name="prepTime" id="prepTime" size="50">
						</p>
						<div id="prepTimeError" class="error">
						</div>
						<p>
							<label for="cookTime">Cook Time</label>
						</p>
						<p>
							<input type="text" name="cookTime" placeholder="cookTime" id="cookTime" size="50">
						</p>
						<div id="cookTimeError" class="error">
						</div>
						<p>
							<label for="totalTime">Total Time</label>
						</p>
						<p>
							<input type="text" placeholder="Total Time" name="totalTime" id="totalTime" size="50">
						</p>
						<div id="totalTimeError" class="error">
						</div>
						<p>
							<label for="servings">Servings</label>
						</p>
						<p>
							<input type="text" placeholder="Servings" name="servings" id="servings" size="50">
						</p>
						<div id="servingsError" class="error">
						</div>
						<p>
							<label for="image">Image</label>
						</p>
						<p>
							<input type="file" placeholder="Image" name="fileToUpload" id="fileToUpload" size="50">
						</p>
						<div id="imageError" class="error">
						</div>						
						<p>
							<label for="ingredients">Ingredients</label>
						</p>
						<p>
							<textarea id="ingredients" name="ingredients" rows="10" cols="50" placeholder="Ingredients, Comma Separated!"></textarea>
						</p>
						<div id="ingredientsError" class="error">
						</div>
						<p>
							<label for="directions">Directions</label>
						</p>
						<p>
							<textarea id="directions" name="directions" rows="10" cols="50"></textarea>
						</p>
						<div id="directionsError" class="error">
						</div>					
						<p>
							<input type="submit" value="Add Recipe" id="submit">
							<input type="reset">
						</p>
						<p>
							&nbsp;
						</p>

					</form>				
					</div>
				</div>
				<div>
					<p>
						&nbsp;
					</p>	
				</div>				
			</main>
			<footer>
				 Formatting and code by Lei Luo, Christy Guan, Emmah Gichia, Etieno Josiah, and Correy Wilkinson.
			</footer>
		</div>
	</body>
</html>