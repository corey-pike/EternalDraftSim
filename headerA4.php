<?php
    session_start();
    $_SESSION['isLoggedIn'] = isset($_SESSION['username']);
?>
<html>
    <head>
        <title>Eternal Draft Simulator</title>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
  </head>
    <body>
        <div id="header">
                    <div class="headerTitle">
                        Eternal Draft Simulator
                    </div>

                    
                    <div id="buttons">

                                    <a href="loginform.php"><button type="button">Log In</button></a>

                                    <a href="registrationform.php"><button type="button">Register</button></a>

                        <img id="profilepicture"  src="images/profile.png" alt="profile picture"/>
                    </div>
            </div>