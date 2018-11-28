<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scramble_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "UPDATE Golfer SET Dogfight='$_REQUEST[Dogfight]' WHERE GolferID='$_REQUEST[GolferID]'";
mysqli_query($conn, $sql);
mysqli_close($conn);

header("location:index.php");
?>
