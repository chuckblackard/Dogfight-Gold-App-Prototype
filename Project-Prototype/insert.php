<?php session_start(); ?>

<!--
 * Landon Tall
 * crud 1 PHP Assignment
 * insert file
 * CIS 476 Fall 2018
 * 10/25/2018
-->
<?php
if (isset($_SESSION['user'])) {
                $username = $_SESSION['user'];
                echo "Welcome, $username";
                echo "<br>";


            } else {

                header("location:index.php");

            }


            ?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="do_insert.php" method="post">
            Username: <input type="text" name="Uname"><br/>
            Dogfight: <input type="text" name="Dogfight"><br/>

            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>
