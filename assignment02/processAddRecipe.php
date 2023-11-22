<?php
session_start();

//check to make sure admin is logged in, if not send them away
if ($_SESSION['user'] !== 'Administrator') {
  header("Location: default.php");
}

//processAddRecipe.php

$category = $_POST['category'];
$subCategory = $_POST['subCategory'];
$title = $_POST['title'];
$prepTime = $_POST['prepTime'];
$cookTime = $_POST['cookTime'];
$totalTime = $_POST['totalTime'];
$servings = $_POST['servings'];
$image = $_FILES["fileToUpload"]["name"];
$ingredients = $_POST['ingredients'];
$directions = $_POST['directions'];


echo $category . "<br>" ;
echo $subCategory . "<br>" ;
echo $title . "<br>" ;
echo $prepTime . "<br>" ;
echo $cookTime . "<br>" ;
echo $totalTime . "<br>" ;
echo $servings . "<br>" ;
echo $image . "<br>" ;
echo $ingredients . "<br>" ;
echo $directions . "<br>" ;


//the following code to upload the file was taken from w3school tutorial

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

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

// Insert data into table
$sql = "INSERT INTO recipes (category, subCategory, title, prepTime, cookTime, totalTime, servings, image, ingredients, directions) 
	VALUES ('$category', '$subCategory', '$title', '$prepTime', '$cookTime', '$totalTime', '$servings', '$image', '$ingredients', '$directions')";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";  
    header("Location: addNewRecipeOK.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>