<?php
session_start();

//check to make sure admin is logged in, if not send them away
if ($_SESSION['user'] !== 'Administrator') {
  header("Location: default.php");
}

//processDeleteRecipe.php
$recipe = $_GET['recipe'];
//echo $recipe;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// delete the file from the server
$sql = "SELECT image FROM recipes WHERE id = $recipe";
$result = mysqli_query($conn, $sql);

// Check if there is a result
if (mysqli_num_rows($result) > 0) {
  // Fetch the result as an associative array
  $row = mysqli_fetch_assoc($result);

  // Get the filename from the associative array
  $filename = $row["image"];

  // Delete the file from the server
  if (unlink("images/" . $filename)) {
    //echo "File deleted successfully.";
  } else {
    //echo "Error deleting file.";
  }
} else {
  //echo "No results found.";
}

// delete data into table
$sql = "DELETE FROM recipes WHERE id = $recipe";

if ($conn->query($sql) === TRUE) {
  //echo "Record deleted successfully";
  header("Location: deleteRecipeOK.php");
} else {
  //echo "Error deleting record: " . $conn->error;
}


$conn->close();


?>