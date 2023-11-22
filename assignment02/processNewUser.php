<!--
Correy Wilkinson 041091846
Freda
Christi

Assignment 2
Due July 31, 2023
.php
-->


<?php
  session_start();    
  
$userName = $_POST['userName'];
$email = $_POST['email'];
$userPassword = $_POST['password'];

echo $userName . "<br>" ;
echo $email . "<br>" ;
echo $userPassword . "<br>" ;

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
$sql = "INSERT INTO users (userName, email, password) VALUES ('$userName', '$email', '$userPassword')";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";  

        $_SESSION['user'] = $userName;

    


     header("Location: default.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>