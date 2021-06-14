<?php

include("connection.php");
//error_reporting(0);

$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$query = "INSERT INTO `contact`(`name`, `company`, `email`, `phone`, `message`) VALUES ('$name','$company','$email','$phone','$message')";
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
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/project/contact.html">
    <?php
?>