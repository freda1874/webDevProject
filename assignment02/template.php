<!--
Correy Wilkinson 041091846

Assignment 2
Due July 31, 2023
default.php
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Correy Wilkinson 041091846">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" type="text/css" href="css/assignment02.css">
		<title>Traditional Recipes</title>
	</head>
	<body>
		<div class="mainContainer">
			<header>
				<h1><a class="item" href="default.php">Traditional Recipes</a></h1>
				<div class="headerContainer">
					<div class="search-box">
						<form name="search" action="search.php" method="get">
							<input type="text" name="search" placeholder="Search by title">
							<input type="submit" value="SEARCH">
						</form>	
					</div>
					<div class="login-box">
						<form name="login" action="processLogin.php" method="post">
							<p class="white">
								<a class="white" href="newUser.php">New User? Click here to create an account!</a>
							<p>
								<input type="text" name="userName" placeholder="User Name">
												
								<input name="password" type="password" placeholder="Password">
							</p>
							<p>
								<input type="submit" value="login">
							</p>							
						</form>
					</div>
				</div>
				<nav class="container">			
					<div class="item">
						<h2><a href="viewCategory.php?cat=African">African</a></h2>
						<h3><a href="viewSubCategory.php?cat=African&subCat=Breakfast">Breakfast</a></h3>
						<h3><a href="viewSubCategory.php?cat=African&subCat=MainDishes">Main Dishes</a></h3>
						<h3><a href="viewSubCategory.php?cat=African&subCat=Snacks">Snacks</a></h3>
					</div>
					<div class="item">
						<h2><a href="viewCategory.php?cat=Chinese">Chinese</a></h2>
						<h3><a href="viewSubCategory.php?cat=Chinese&subCat=Breakfast">Breakfast</a></h3>
						<h3><a href="viewSubCategory.php?cat=Chinese&subCat=MainDishes">Main Dishes</a></h3>
						<h3><a href="viewSubCategory.php?cat=Chinese&subCat=Snacks">Snacks</a></h3>						
					</div>
					<div class="item">
						<h2><a href="viewCategory.php?cat=Japanese">Japanese</a></h2>
						<h3><a href="viewSubCategory.php?cat=Japanese&subCat=Breakfast">Breakfast</a></h3>
						<h3><a href="viewSubCategory.php?cat=Japanese&subCat=MainDishes">Main Dishes</a></h3>
						<h3><a href="viewSubCategory.php?cat=Japanese&subCat=Snacks">Snacks</a></h3>						
					</div>					
				</nav>					
			</header>
			<main>
				<div class="cardContainer">
					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
						<P>tITLE OF THJE RECIPE</p>
						<p>PICK SOMETHING ELSE TO DISPLAY</p>
					</div>
									<div class="recipeContainer">
										<img class="thumb" src="images/OMG.jpg">
					</div>					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
					</div>					
					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
					</div>
										<div class="recipeContainer">
											<img class="thumb" src="images/OMG.jpg">
					</div>					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
					</div>					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
					</div>					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
					</div>					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
					</div>					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
					</div>					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
					</div>					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
					</div>					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
					</div>					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
					</div>					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
					</div>					<div class="recipeContainer">
						<img class="thumb" src="images/OMG.jpg">
					</div>
					
				</div>
				<div>
					&nbsp;
				</div>
			</main>
			<footer>
				 Formatting and code by Lei Luo, Christy Guan, Emmah Gichia, Etieno Josiah, and Correy Wilkinson.
			</footer>
		</div>
	</body>
</html>
