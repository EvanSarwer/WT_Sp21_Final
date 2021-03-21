<?php
	if(!isset($_COOKIE["username"])){
		header("Location:index.php");
	}

?>

<html>
	<head>
	</head>
	<body>
		<h1>Welcome <?php echo $_COOKIE["username"];?></h1>
	 
	</body>
</html>