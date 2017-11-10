<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mydb");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$weight = mysqli_real_escape_string($link, $_REQUEST['weight']);
$fedtprocent = mysqli_real_escape_string($link, $_REQUEST['fedtprocent']);

// attempt insert query execution
$sql = "INSERT INTO bodydata (Weight, Fatpercentage) VALUES ('$weight', '$fedtprocent')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>