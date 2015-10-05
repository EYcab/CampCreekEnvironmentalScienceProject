<?php
/*
Delete data from the database
*/
$link = mysqli_connect("localhost", "root","", "userinfo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "DELETE FROM users WHERE username = '".mysql_real_escape_string($_GET['username'])."'");
notice('The user'.$_GET['username'].'was deleted.');


// close connection
mysqli_close($link);
?>


