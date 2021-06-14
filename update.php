<?php
include("connection.php");
error_reporting(0);

$slno = $_GET['slno'];
$bname = $_GET['bn'];
$bnum = $_GET['mo'];
$bcol = $_GET['co'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/update.css">
    <title>Update Details</title>
</head>
<body class="bg">
    <!--NAVIGATION BAR-->
    <nav id="nav1">
        <div id="navid">
        <img id="logo" src="Gallery/relogo.jpg" height="100px" width="150px">
        <ul>
            <div id="nav2">
            <li class="nav3">
                <a class="nav4" href="home.html">  Home </a>
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
            <h2>Update Details</h2>
        <fieldset>
        <form action="" method="GET">
            <label id="lab1">Serial Number : </label><br><br>
            <input id="in1" type="text" name="slno" value="<?php echo "$slno" ?>" required><br><br><br>
            <label id="lab2">Bike Name : </label><br><br>
            <input id="in2" type="text" name="bikename" value="<?php echo "$bname" ?>" required><br><br><br>
            <label id="lab3">Model Number : </label><br><br>
            <input id="in3" type="number" name="model" value="<?php echo "$bnum"; ?>" required><br><br><br>
            <label id="lab4">Color : </label><br><br>
            <input id="in4" type="text" name="color" value="<?php echo "$bcol"; ?>" required><br><br><br>
            <input type="submit" value="Update" name="submit" id="btn">  
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
if($_GET[submit])
{
$slno = $_GET['slno'];
$bname = $_GET['bikename'];
$bnum = $_GET['model'];
$bcol = $_GET['color'];

$query = "UPDATE `bikes` SET `Serial_Number`='$slno',`Bike_name`='$bname',`Model`='$bnum',`Color`='$bcol' WHERE `Serial_Number` = '$slno'";
$data = mysqli_query($conn, $query);
if($data)
{
    echo"<script>alert('Updated successfully!')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/delete.php">
    <?php
}
else
{
    echo"<script>alert('Failed to update!')</script>";
}
}
?>