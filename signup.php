<?php 
session_start();

	include("connection2.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$mail_id = $_POST['mail_id'];
		$password = $_POST['password'];

		if(!empty($mail_id) && !empty($password) && !is_numeric($mail_id))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into log (user_id,mail_id,password) values ('$user_id','$mail_id','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo"<script type='text/javascript'> 
    alert('Wrong credentials!') 
    </script>";
		}
	}
?>

<html>
    <head>
        <link rel="stylesheet" href="CSS/signup.css">
        <title>Sign Up</title>
    </head>
<body class="bg">
    <center>
        <h2>Sign Up</h2>
        <form method="POST">
            <fieldset id="fs">
                <div id="li">
                <label>Email : </label><br><br>
                <input type="email" class="input" name="mail_id" required><br><br><br>
                <label>Password : </label><br><br>
                <input type="password" class="input" name="password" required><br><br><br>
                <input type="submit" id="submit" name="signup" value="Sign Up"><br><br><br>
				<a href="login.php" id="sb">Click here to Login</a>
                </div>
            </fieldset>
        </form>
    </center> 


</body>
</html>