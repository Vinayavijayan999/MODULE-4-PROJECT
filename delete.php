<?php
include("connection.php");
//error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/delete.css">
    <title>Delete</title>
</head>
<body class="bg">
    <!--NAVIGATION BAR-->
    <nav id="nav1">
        <div id="navid">
        <img id="logo" src="Gallery/relogo.jpg" height="100px" width="150px">
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

        <!--TABLE DESIGN-->
        <center>
            <table id="tab" border="2">
                <tr>
                    <th>Sl Number</th>
                    <th>Bike Name</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Edit/Update</th>
                    <th>Delete</th>
                </tr>
        
        <?php
        include("connection.php");
        error_reporting(0);
        
        $query = "SELECT * FROM bikes";
        $data = mysqli_query($conn, $query);
        $total = mysqli_num_rows($data);
        //$result = mysqli_fetch_assoc($data);
        
        if ($total != 0)
        {
            while($result = mysqli_fetch_assoc($data))
            {
                echo "
                <tr>
                <td>".$result['Serial_Number']."</td>
                <td>".$result['Bike_name']."</td>
                <td>".$result['Model']."</td>
                <td>".$result['Color']."</td>
                <td><a href='update.php?slno=$result[Serial_Number]&bn=$result[Bike_name]&mo=$result[Model]&co=$result[Color]'><input type='button' value='Edit/Update' id='ed'></td>
                <td><a href='deletea.php?slno=$result[Serial_Number]'><input type='button' value='Delete' id='del'></td>
                ";
                
            }
        }
        ?>
        </table>
        </center>
        <footer id="footer">
                <center><p id="footer1">© Royal Enfield Showroom Kochi</p></center>
            </footer>
</body>
</html>