<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker - PHP</title>
</head>

<body>
    <h1>Docker File --$-- </h1>
    <?php
    // phpinfo();
    ?>
</body>

</html>

<?php


// $servername = "localhost";
// $servername = "192.168.15.69";
$servername = "172.27.160.1";
$username = "root";
$password = "1234";
$Dadabase = "docker_db";


// Create connection
$conn = new mysqli($servername, $username, $password,$Dadabase,3306);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


// $conn = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$Dadabase", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//   } catch(PDOException $e) {
//     echo "---------------<br>";
//     echo "Connection failed: " . $e->getMessage();
//   }
?>