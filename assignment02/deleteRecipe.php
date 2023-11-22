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


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully" . "<br>";

// SQL query to get a recordset
$sql = "SELECT * FROM recipes";
$result = $conn->query($sql);


$conn->close();
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
					<?php while($row = $result->fetch_assoc()) { ?>				
					<div class="recipeContainer">
						<img class="thumb" src="images/<?php echo $row['image'];?>">
						<h4><?php echo $row['title'];?></h4>
						<h5>
							<?php 
								if ($row['subCategory'] == "MainDishes") {
									echo "Main Dishes";
								} else {
									echo $row['subCategory'];
								} ?>
						</h5>
						<h5>Prep time: <?php echo $row['prepTime'];?></h5>
						<h5>Total time: <?php echo $row['totalTime'];?></h5>
						<div class="item">
							<h5><a href="processDeleteRecipe.php?recipe=<?php echo $row['id'];?>">Delete Recipe</a></h5>
						</div>
					</div>				
					<?php } ?>
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