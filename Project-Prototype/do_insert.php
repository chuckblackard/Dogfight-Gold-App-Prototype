<?php session_start(); ?>

<!--
 * Landon Tall
 * crud 1 PHP Assignment
 * do insert file
 * CIS 476 Fall 2018
 * 10/25/2018
-->



<?php




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scramble_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Golfer (Uname, Dogfight) VALUES
('$_POST[Uname]','$_POST[Dogfight]')";
$conn->query($sql);


$conn->close();

header("location:index.php");
?>
