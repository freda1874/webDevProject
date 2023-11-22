<?php
session_start();
?>

<!--
Correy Wilkinson 041091846
Freda Luo
Christi G
Etieno Josiah

Assignment 2
Due July 31, 2023
default.php

-->


<?php

//this script will accept the user input from the sign in 
//then after a connection is made it will check if the userName exists
//if the user name and passwords match something in the databse

//get the category passed in by link
$userName = $_POST['userName'];
$userPassword = $_POST['password'];
echo $userName . "<br>";
echo $userPassword . "<br>";

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
echo "Connected successfully" . "<br>";

// SQL query to get a recordset
$sql = "SELECT * FROM users WHERE userName ='$userName' AND password = '$userPassword'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    //echo "User exists";
    $_SESSION['user'] = $userName;
} else {
    echo "User does not exist";
    $_SESSION["loginError"] = "User Name and Password not found in the database, please try again.";
	
    header("Location: default.php");
}

//if the Administrator is logged in, send them to the control panel
if ($_SESSION['user'] == "Administrator") {
	header("Location: admin.php"); 
} else {
	header("Location: default.php");    
}



?>