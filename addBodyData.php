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

        $weight = $_POST['weight'];
        $fedtprocent = $_POST['fedtprocent'];

        $newBodyData = new bodyData($weight, $fedtprocent);

//        $newBodyData -> weight = $b1;
//        $newBodyData -> fedtprocent = $b2;

        AddBodyData($newBodyData);

        echo '<pre>', "<br> Du indtastede... " . $newBodyData , '</pre>';

    ?>

<p>
<form action="getBodyData.php" method="get">
    <input type="submit" value="Get Data">
</form>

</body>
</html>
