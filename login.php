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

			//read from database
			$query = "select * from log where mail_id = '$mail_id' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
					}
				}
			}
			
			echo"<script type='text/javascript'> 
    alert('Invalid credentials!') 
    </script>";
		}else
		{
			echo"<script type='text/javascript'> 
    alert('Invalid credentials!') 
    </script>";
		}
	}

?>


<html>
    <head>
        <link rel="stylesheet" href="CSS/login.css">
        <title>Login</title>
    </head>
<body class="bg">
    <center>
        <h2>Login</h2>
        <form method="POST">
            <fieldset id="fs">
                <div id="li">
                <label>Email : </label><br><br>
                <input type="email" class="input" name="mail_id"><br><br><br>
                <label>Password : </label><br><br>
                <input type="password" class="input" name="password"><br><br><br>
                <input type="submit" id="submit" name="login" value="Login"><br><br><br>
                <a href="signup.php" id="sb">Click here to Sign Up</a>
                </div>
            </fieldset>
        </form>
    </center> 


</body>
</html>