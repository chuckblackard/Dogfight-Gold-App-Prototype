<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <p />
        <?php
        $con = mysqli_connect("localhost", "root", "", "scramble_db");
        $result = mysqli_query($con, "SELECT * FROM Golfer");
        echo "<table border='1'>
                <tr>
                <th>username</th>
                <th>Dogfight</th>

                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Uname'] . "</td>";
            echo "<td>" . $row['Dogfight'] . "</td>";

            echo "</tr>";
        }
        echo "</table>";

        mysqli_close($con);
        ?>
    </body>
</html>
