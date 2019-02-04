<?php
include "dbconnection.php";

$firstName = "James";
$lastName = "Joe";
$email = "james@joe.com";
$roles = "project";
$phoneNo = "555-555-555";
$userName = $firstName."@".$lastName ;
$password = rand(0, 1000000);
$status = "active";


$insertUser = "INSERT into users(firstName, lastName, email, userName, password, status, roles)
              VALUES('$firstName','$lastName','$email', '$userName', '$password', '$status', '$roles')" ;
        
$exeInsertUser = mysqli_query($conn, $insertUser) or die(mysqli_error());

if($exeInsertUser){
    echo "<br>1 user successfully registered!";
}



?>