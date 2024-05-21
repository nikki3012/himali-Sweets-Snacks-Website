<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "himali";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve image data from database
$sql = "SELECT * FROM inventory WHERE id = 74"; // Replace tablename with your actual table name
$result = $conn->query($sql);
$row = $result->fetch_assoc();

header("Content-type: image/jpeg");
echo $row["image"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    

</head>
<body>

    <img src="<?php header("Content-type: image/jpeg");
echo $row["image"]; ?> "/>
</body>
</html>