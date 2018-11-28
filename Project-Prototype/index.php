<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" type="text/css" href="../css/styles.css" />
        <script src="../js/animation.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/login-styles.css"/>
        <title>
            Golf Scramble App
        </title>
    </head>
    <body>
        <?php
        // 1. display error message in the session (if any): $_SESSION['error']

        if (isset($_SESSION['error'])) {
                echo "<em>" . $_SESSION['error'] . "</em>";
            }

        // 2. display either the user's name and the game menu or the form/link below
        // (display the menu by using a php include of menu.html)
         if (isset($_SESSION['user'])) {
                $username = $_SESSION['user'];
                echo "Welcome, $username";
                include 'menu.html';
            } else {

        ?>
        <div class="text-center" style="padding:50px 0">
            <div class="logo">login</div>
        	<div class="login-form-1">
        		<form id="login-form" class="text-left" action="authenticate.php">
        			<div class="login-form-main-message"></div>
        			<div class="main-login-form">
        				<div class="login-group">
        					<div class="form-group">
        						<label for="lg_username" class="sr-only">
        						    Username
        					    </label>
        						<input type="text" class="form-control" id="lg_username" name="user" placeholder="username">
        					</div>
        					<div class="form-group">
        						<label for="lg_password" class="sr-only">
        						    Password
        					    </label>
        						<input type="password" class="form-control" id="lg_password" name="password" placeholder="password">
        				    </div>
        				</div>
        			    <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
        			    </div>
        			    <div class="etc-login-form">
        				    <p>
        				        new user?
        				        <a href="#">
        				            create new account
        			            </a>
        		            </p>
        			    </div>
        		    </form>
        	    </div>
    	    </div>
            <?php
            }
            ?>
        </body>
    </html>
