<?php
	require("_assets/config/dbc.php");
?>
<html>
	<head>
		<title>
			PHP Quest
		</title>
	</head>
	<body>
		<body>
		<table width='300' border='0' align='center' cellpadding='0' cellspacing='1' bgcolor='#CCCCCC'>
			<tr>
				<form action = 'register.php' method='post'>
				<td>
					<table width='100%' border='0' cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>
						<tr>
							<td colspan='3'><strong><Register</strong></td>
						</tr>
						<tr>
							<td width='78'>Username</td>
							<td width='6'>:</td>
							<td width='294'><input name='user' type='text' id='user'></td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input name='pass' type='password' id='pass'></td>
						</tr>
						<tr>
							<td>Re-Enter Password</td>
							<td>:</td>
							<td><input name='repeatpass' type='password' id='repeatpass'></td>
						</tr>
						<tr>
							<td>Enter Email</td>
							<td>:</td>
							<td><input name='email' name='email' type='email' id='email'></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><input type='submit' name = 'submit' value='Register'></td>
							</form>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	<?php
		$submit = $_POST['submit'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$repeatpass = $_POST['repeatpass'];
		$email = $_POST['email'];
		
		if($submit)
		{
			if($user && $pass && $repeatpass && $email)
			{
				if($pass == $repeatpass)
				{
					if(strlen($user)> 65 || strlen($pass)> 65)
					{
						echo "Username and pass must be less than 65 characters!";
						echo "Username is " . strlen($user) . " long!";
						echo "Password is " . strlen($pass) . " long!";
					}
					else
					{
						echo "You have been registered!";
						$regquery = "INSERT INTO Members(username, password, email) VALUES('$user','$pass', '$email')";
						$reg = mysqli_query($conn, $regquery);
						echo "<a href='index.php'><input type='submit' value='Click here to get to the home page'></a>";
					}
				}
				else
				{
					echo "Passwords to not match!";
				}
				
			}
			else
			{
				echo "Please fill in all fields!";
			}
		}
	?>
</form>
	</body>
</html>