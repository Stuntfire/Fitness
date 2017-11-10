<?php
// Start the session
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bodydata";
$result = $conn->query($sql);
$query = mysqli_query($conn, $sql);

//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["Weight"]. " - Name: " . $row["Fatpercentage"]."<br>";
//    }
//} else {
//    echo "0 results";
//}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <meta charset="UTF-8">

<!--    <link href="/open-iconic/font/css/open-iconic.css" rel="stylesheet">-->

<!--    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->

    <title>Add Body Data</title>
</head>
<body>
<div class="jumbotron">
<div class="container">
    <h1 class="display-1">Hello, fitness nerd!</h1>
<!--    <span class="oi oi-pulse" title="pulse" aria-hidden="true"></span>-->
<!--    <i class="material-icons" style="color: red">face</i>-->

    <h1 class="display-4">Indtast data</h1>

<form action="addBodyData.php" method="post">
    <div class="form-group">
        <label>Weight:</label>
        <input type="number" class="form-control" name="weight" placeholder="Type a number" required>
    </div>

    <div class="form-group">
        <label>Fedtprocent:</label>
        <input type="number" class="form-control" name="fedtprocent" placeholder="Type a number" required>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit data to an array</button>
    </div>
</form>

<!--insert data into DB-->
<form action="insert.php" method="post">
    <h3 class="text-center">Nu med database! <span class="badge badge-secondary">New</span></h3>
    <div class="form-group">
        <label for="weight">Weight: </label>
        <input type="number" class="form-control" name="weight" id="weight" placeholder="Type a number">
    </div>
    <div class="form-group">
        <label for="lastName">Fedtprocent:</label>
        <input type="number" class="form-control" name="fedtprocent" id="fedtprocent" placeholder="Type a number">
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-success">Submit data to database</button>
    </div>
</form>

<!--Read from database-->
    <table class="table">
        <thead class="text-center">
        <tr>
            <th scope="col">Weight</th>
            <th scope="col">Fatpercentage</th>
        </tr>
        </thead>
        <tbody class="text-center">
        <?php
        while ($row = mysqli_fetch_array($query))
        {
            echo '<tr>
        <td>' . $row['Weight'] . " kg." .  '</td>
        <td>' . $row['Fatpercentage'] . "%" . '</td>
      </tr>';}
        ?>
        </tbody>
    </table>
</div>
</div>




</body>
</html>