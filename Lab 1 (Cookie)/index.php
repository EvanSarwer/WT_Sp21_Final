<?php

	$err_message="";
 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username=$_POST["username"];
		$password=$_POST["password"];
		if($username == "asif" && $password == "1234"){
			setcookie("username",$username,time()+120);
			header("Location:dashboard.php");
		}
		else
			$err_message= "Invalid Username or Password";
	
	}


?>


<html>
	<head>
	</head>
	<body>
			<form action="" method="post">
				<table align="center">
					<tr>
						<td><span color="red"><?php echo $err_message;?></span> </td>
					</tr>
				
					<tr>
						<td><span>Username:</span> </td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td><span>Password: </span></td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><input type="submit"  value="Login" name="login">
					</tr>
				</table>
			</form>
		
	</body>
</html>