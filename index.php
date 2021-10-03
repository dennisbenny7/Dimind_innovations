<?php

include_once("database.php");

$result = mysqli_query($mysqli, "SELECT * FROM users"); 
?>

<html>
<head>	
	<title>USING XAMPP</title>
</head>

<body>
<h1 style="text-align:center">PHP crud operations using Xampp and Apache server and Mysql</h1>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=3>

	<tr bgcolor='blue'>
		<td style="color:white;">Name</td>
		<td style="color:white;">Id</td>
		<td style="color:white;">Email</td>
		<td style="color:white;">Update</td>
	</tr>
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>

	&copy Dennis benny
</body>
</html>
