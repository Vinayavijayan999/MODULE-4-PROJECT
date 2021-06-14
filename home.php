<?php 
session_start();

	include("connection2.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/home.css">
    <title>Royal Enfield</title>
</head>
<body class="bg">
    <!--NAVIGATION BAR-->
    <nav id="nav1">
        <div id="navid">
        <img id="logo" src="relogo.jpg" height="100px" width="150px">
        <ul>
            <div id="nav2">
            <li class="nav3">
                <a class="nav4" href="home.php">  Home </a>
            </li>
            <li class="nav3">
                <a class="nav4" href="bikes.html">  Bikes  </a>
            </li>
            <li class="nav3">
                <a class="nav4" href="contact.html">  Contact  </a>
            </li>
            <li class="nav3">
                <a class="nav4" href="about.html">  About  </a>
            </li>
            <li class="nav">
                <a class="nav4" href="admin.html">  Admin Dashboard  </a>
            </li>
        </div>
        </ul>
        </div>
    </nav>
    <!--NAVIGATION BAR ENDED-->
    <div class="bg1">
       <!-- <img src="bgimg1.jpg"> -->
       <h1 id="welcome">Welcome!</h1>
       <center><h2>Bike Showroom Management System</h2></center>
    </div>
    <footer id="footer">
        <center><p id="footer1">© Royal Enfield Showroom Kochi</p></center>
    </footer>
</body>
</html>