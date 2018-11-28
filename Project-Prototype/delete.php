<?php session_start(); ?>


<?php
if (isset($_SESSION['user'])) {
                $username = $_SESSION['user'];
                echo "Welcome, $username";
                echo "<br>";


            } else {

                header("location:index.php");

            }


            ?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        Enter the name of the person to delete.
        <form action="do_delete.php" method="post"
             onSubmit="if(confirm('Are you sure?')) return true; return false;">
            Username: <input type="text" name="Uname" />
            <input type="submit" />
        </form>
    </body>
</html>
