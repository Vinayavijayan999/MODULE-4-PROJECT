<?php
include("connection.php");
error_reporting(0);

$slno = $_GET['slno'];
$query ="DELETE FROM `bikes` WHERE `Serial_Number`= '$slno' ";
$data = mysqli_query ($conn, $query);
$redirect = header("Location: delete.php");

if ($data)
{
    echo "<script type='text/javascript'> 
    alert('Deleted Successfully!') 
    </script>";
    
    
}
else
{
    echo "Not deleted";
}
?>