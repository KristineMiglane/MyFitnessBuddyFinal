<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

$username = $password = $age = $gender = "";
 if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];
//$age = $_POST['age'];
//$gender = $_POST['gender'];

 //$query = "INSERT INTO login ('username','password','age','gender') VALUES ('".$username."','".$password."','".$age."','".$gender."')";
if(empty($username)|| empty($password))
{ 
    echo "Ooops, can't leave blank";
    header('Location: signupForm.html');
}
else
{
$query = "INSERT INTO login (`username`,`password`) VALUES ('".$username."','".$password."')";
 if(!mysqli_query($conn, $query)) {
    echo 'error.';
}

else {
    echo 'signup successful';
    header('Location: mainMenu.html');
}
}    

    

}
?>