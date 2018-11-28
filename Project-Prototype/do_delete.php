<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "scramble_db";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // sql to delete a record
            $sql = "DELETE FROM Golfer WHERE Uname='$_REQUEST[Uname]'";

            // use exec() because no results are returned

                $conn->query($sql);


$conn->close();

header("location:index.php");
?>
