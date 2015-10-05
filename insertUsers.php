<?php
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with user 'root' and password "CS195" and database named "demo"
*/
$link = mysqli_connect("localhost", "root","", "userinfo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$userID = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['Password']);
$admin = mysqli_real_escape_string($link, $_POST['Admin']);

//echo "userID is $userID  THIS IS IT";

// attempt insert query execution
$sql = "INSERT INTO users(userID, password, admin) VALUES ('$userID', '$password', '$admin')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

