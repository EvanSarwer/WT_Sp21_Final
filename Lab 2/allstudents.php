<?php
	session_start();
	if(!isset($_SESSION["loggedin"])){
		header("Location: login.php");
	}
	require_once "db_config.php";
	
	$query = "select * from sudents";
	$result = get($query);
	
?>

	<table border="1" style="border-collapse:collapse;">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Date of Birth</th>
			<th>Credit</th>
			<th>CGPA</th>
			<th>Department</th>
		</tr>
		
<?php
	foreach($result as $row){
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["name"]."</td>";
		echo "<td>".$row["dob"]."</td>";
		echo "<td>".$row["credit"]."</td>";
		echo "<td>".$row["cgpa"]."</td>";
		echo "<td>".$row["dept_id"]."</td>";
		echo "<td><a href="allstudents.php"> All Students </a></td>";
		echo "<td><a href="allstudents.php"> All Students </a></td>";
		echo "</tr>";
	}
	

?>
</table>
