<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/add.css">
    <title>Add Details</title>
</head>
<body class="bg">
    <!--NAVIGATION BAR-->
    <nav id="nav1">
        <div id="navid">
        <img id="logo" src="Gallery/relogo.jpg" height="100px" width="150px">
        <ul>
            <div id="nav2">
            <li class="nav3">
                <a class="nav4" href="home1.php">  Home </a>
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

    <div id="form">
        <center>
            <h2>Add Details</h2>
        <fieldset>
        <form action="" method="POST">
            <label id="lab1">Serial Number : </label><br><br>
            <input id="in1" type="text" name="slno" required><br><br><br>
            <label id="lab2">Bike Name : </label><br><br>
            <input id="in2" type="text" name="bikename" required><br><br><br>
            <label id="lab3">Model Number : </label><br><br>
            <input id="in3" type="number" name="model" required><br><br><br>
            <label id="lab4">Color : </label><br><br>
            <input id="in4" type="text" name="color" required><br><br><br>
            <input type="submit" value="Add" name="submit" class="btn"> 
            <input type="reset" value="Reset" name="reset" class="btn"> 
        </form>
        </fieldset>
        </center>
    </div>
    <footer id="footer">
        <center><p id="footer1">© Royal Enfield Showroom Kochi</p></center>
    </footer>
</body>
</html>

<?php
$slno = $_POST['slno'];
$bname = $_POST['bikename'];
$bnum = $_POST['model'];
$bcol = $_POST['color'];

$query = "INSERT INTO `bikes`(`Serial_Number`, `Bike_name`, `Model`, `Color`) VALUES ($slno,'$bname','$bnum','$bcol')";
$data = mysqli_query($conn, $query);
if($data)
{
    echo"<script type='text/javascript'> 
    alert('Inserted Successfully!') 
    </script>";
}
else
{
    echo"<script type='text/javascript'> 
    alert('Please provide valid details!') 
    </script>";
}
?>