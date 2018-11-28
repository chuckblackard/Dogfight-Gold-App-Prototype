<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "scramble_db";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM Golfer where Uname = '" . $_REQUEST['Uname'] . "'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            ?>
            <form name="f" action="do_update.php" method="post">
                <input type="hidden" name="GolferID" value="<?php echo $row['GolferID']; ?>" >
                <label ><?php echo $row['name']; ?></label><br/>
                Dogfight: <input type="text" name="Dogfight" value="<?php echo $row['Dogfight']; ?>"><br/>

                <br/>
                <input type="submit" value="Update">
            </form>

            <?php
        } else {
            echo "There is no person by that name in the database.";
            echo"<a href='index.php'>Menu</a>";
        }

        mysqli_close($conn);
        ?>
    </body>
</html>
