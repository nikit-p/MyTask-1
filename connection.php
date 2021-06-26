<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labour_info";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
	echo "";
}
else
{
	die("Connection Failed." .mysqli_error($conn));
}
?>