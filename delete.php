<?php

ob_start();

$con =mysqli_connect("localhost","root","","vycomp");

$id = $_GET['id'];

$q  = "DELETE FROM `om` WHERE id = $id ";

mysqli_query($con,$q);

header("Location:Admin1.php");
?>