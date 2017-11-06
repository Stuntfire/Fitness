<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: Søren Roed Schack
 * Date: 06-Nov-17
 * Time: 13:38
 */

include 'bodyData.php';
include 'data.php';

function AddData()
{
    $newBodyData = new bodyData($_POST["weight"] , $_POST["fedtprocent"]);

    AddBodyData($newBodyData);



}




class addBodyData
{


}

?>

</body>
</html>
