<?php
 $conn = mysqli_connect("localhost", "root", "") or die(mysli_error());
if($conn){
    echo "Db connection is successful!"."<br>";
}

$db = mysqli_select_db($conn, "issue-tracker") or die(mysqli_error());

if($db){
    echo "Database successfully Selected";
}

$createUserTable = "CREATE TABLE users (
    ID int NOT NULL,
    firstName varchar(255) NOT NULL,
    lastName varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    roles varchar(255) NOT NULL,
    userName varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    status varchar(255) NOT NULL,
    PRIMARY KEY (ID)
)";

if(mysqli_query($conn, $createUserTable)){
    echo  "<br>User table successfully created";
}

$createIssues = "CREATE TABLE issues (
    ID int NOT NULL,
    location varchar(225) NOT NULL,
    siteName varchar(225) NOT NULL,
    Status varchar(225) NOT NULL,
    officerInCharge varchar(225) NOT NULL,
    dateTime varchar(225) NOT NULL, 
    PRIMARY KEY (ID)
    )";
if(mysqli_query($conn, $createIssues)){
    echo "<br>issues table successefully created";
}

$createComment = "CREATE TABLE comments(
    ID int NOT NULL,
    userID varchar(225) NOT NULL,
    issueID varchar(225) NOT NULL,
    Status varchar(225) NOT NULL,
    dateTime varchar(225) NOT NULL, 
    PRIMARY KEY (ID)
    )";
if(mysqli_query($conn, $createComment)){
    echo "<br>comments table successefully created";
}

?>
