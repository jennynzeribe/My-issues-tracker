<?php
include "dbconnection.php";

$userId = "James";
$issueId = "Joe";
$status = "active";
$date = date("d-m-Y H:i:s");

$insertComment = "INSERT into comments(userId, issueId, status, dateTime)
              VALUES('$userId','$issueId','$status','$date')" ;


$exeinsertComment = mysqli_query($conn, $insertComment) or die(mysqli_error());

if($exeinsertComment){
    echo "<br>1 comment successfully registered!";
}



?>