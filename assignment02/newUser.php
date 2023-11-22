<?php
session_start();

if (!isset($_SESSION['username'])) {
    // Set session variable
    $_SESSION['username'] = null;
}
//echo 'Session User is: ' . $_SESSION['user'];

session_write_close();
?>

<!--
Correy Wilkinson 041091846
Lei Luo 041068533
Emmah Gichia 041085709
Etieno Josiah 041080380
Christy Guan 041002854

Assignment 2
Due August 4, 2023
newUser.php
-->

<?php
$category = "";
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
		<script src="js/script.js" defer></script>
		<script src="js/search.js" defer></script>		
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
				</div>
				<?php if ($category == "") { ?>
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
				<?php } ?>				
				<?php if ($category == "African") { ?>
				<nav class="container">			
					<div class="item">
						<h2><a href="viewCategory.php?cat=African">African</a></h2>							
						<h3><a href="viewSubCategory.php?cat=African&subCat=Breakfast">Breakfast</a></h3>
						<h3><a href="viewSubCategory.php?cat=African&subCat=MainDishes">Main Dishes</a></h3>
						<h3><a href="viewSubCategory.php?cat=African&subCat=Snacks">Snacks</a></h3>							
					</div>
					<div class="item">
						<h2><a href="viewCategory.php?cat=Chinese">Chinese</a></h2>						
					</div>
					<div class="item">
						<h2><a href="viewCategory.php?cat=Japanese">Japanese</a></h2>					
					</div>					
				</nav>	
				<?php } ?>
				<?php if ($category == "Chinese") { ?>
				<nav class="container">			
					<div class="item">
						<h2><a href="viewCategory.php?cat=African">African</a></h2>							
					</div>
					<div class="item">
						<h2><a href="viewCategory.php?cat=Chinese">Chinese</a></h2>	
						<h3><a href="viewSubCategory.php?cat=Chinese&subCat=Breakfast">Breakfast</a></h3>
						<h3><a href="viewSubCategory.php?cat=Chinese&subCat=MainDishes">Main Dishes</a></h3>
						<h3><a href="viewSubCategory.php?cat=Chinese&subCat=Snacks">Snacks</a></h3>							
					</div>
					<div class="item">
						<h2><a href="viewCategory.php?cat=Japanese">Japanese</a></h2>					
					</div>					
				</nav>	
				<?php } ?>	
				<?php if ($category == "Japanese") { ?>
				<nav class="container">			
					<div class="item">
						<h2><a href="viewCategory.php?cat=African">African</a></h2>							
					</div>
					<div class="item">
						<h2><a href="viewCategory.php?cat=Chinese">Chinese</a></h2>							
					</div>
					<div class="item">
						<h2><a href="viewCategory.php?cat=Japanese">Japanese</a></h2>	
						<h3><a href="viewSubCategory.php?cat=Japanese&subCat=Breakfast">Breakfast</a></h3>
						<h3><a href="viewSubCategory.php?cat=Japanese&subCat=MainDishes">Main Dishes</a></h3>
						<h3><a href="viewSubCategory.php?cat=Japanese&subCat=Snacks">Snacks</a></h3>						
					</div>					
				</nav>	
				<?php } ?>				
			</header>
			<main>
				<div class="cardContainer">
					<div class="singleRecipeContainer">
					<h2 class="red">Please enter your information below</h2>
					<form name="registration" method="post" onsubmit="return validate()" action="processNewUser.php">
						<p>
							<label for="email">Email Address</label>
						</p>
						<p>
							<input type="text" placeholder="Email" name="email" id="email">
						</p>
						<div id="emailError" class="error">
						</div>
						<p>
							<label for="userName">User Name</label>
						</p>
						<p>
							<input type="text" placeholder="User name" name="userName" id="userName">
						</p>
						<div id="userNameError" class="error">
						</div>
						<p>
							<label for="password">Password</label>
						</p>
						<p>
							<input type="password" name="password" placeholder="Password" id="password">
						</p>
						<div id="passwordError" class="error">
						</div>
						<p>
							<label for="passwordCheck">Re-Type Password</label>
						</p>
						<p>
							<input type="password" name="passwordCheck" placeholder="Password" id="passwordCheck">
						</p>
						<p>
							&nbsp;
						</p>						
						<p>
							<input type="checkbox" name="newletter" id="newsletter" onClick=alert(newsletterCheck)>
							I agree to receive Traditional Recipes Newsletters
						</p>
						<p>
							&nbsp;
						</p>
						<p>
							<input type="checkbox" name="terms" id="terms">
							I agree to the terms and conditions
						</p>
						<div id="termsError" class="error">
						</div>
						<p>
							&nbsp;
						</p>						
						<p>
							<input type="submit" value="Sign-Up" id="submit">
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