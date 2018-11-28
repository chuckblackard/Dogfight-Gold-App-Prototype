<?php session_start(); ?>

<?php

// 1. validate the form input (set $_SESSION['error'] if there is a problem)
// 2. create a database connection (using the standard root user)
// 3. select the password from the users table where the username came from the form
// 4. use password_verify to see if the form password matches the hashed password from db: password_verify($pwdFromFrom, $dbPwd) returns a boolean
// 5. forward user to index.php
// 6. allow execution to continue and close db connection


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scramble_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user = $_REQUEST['user'];
$userPwd = $_REQUEST['password'];

$sql = "SELECT password FROM administrators WHERE user = '$user'";
$result = mysqli_query($conn, $sql);;

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "$userPwd";
        echo "<br>";
        echo $row['password'];
        // comment out $verified since we are not implementing hash and do a simple check to see if the password matches the input password

        if ($userPwd === $row['password']) {
            $_SESSION['user'] = $user;
             header("location:index.php");
            $_SESSION['error'] = '';

        } else {

            $_SESSION['error'] = 'invalid username or password';
            echo "verify failure";
        //   header("location:index.php");
        }
    }
} else {

    $_SESSION['error'] = 'invalid username or password';
    echo "username is wrong";
   // header("location:index.php");
}
mysqli_close($conn);


?>
