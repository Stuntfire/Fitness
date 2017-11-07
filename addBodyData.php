<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

include 'bodyData.php';
include 'data.php';

$b1 = $_POST['weight'];
$b2 = $_POST['fedtprocent'];

$newBodyData = new bodyData();

$newBodyData->weight=$b1;
$newBodyData->fedtprocent=$b2;

AddBodyData($newBodyData);

echo "<br> Du indtastede... " . $newBodyData;

class addBodyData
{


}

?>

</body>
</html>
