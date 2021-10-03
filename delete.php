<?php

include("database.php");


$id = $_GET['id'];


$result = mysqli_query($mysqli, "DELETE FROM users WHERE age=$id");


header("Location:index.php");
?>

