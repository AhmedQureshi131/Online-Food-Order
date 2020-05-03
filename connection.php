<?php

function Connect()
{
	$dbhost = "www.math-cs.ucmo.edu";
	$dbuser = "cs4130_sp2020";
	$dbpass = "tempPWD!";
	$dbname = "cs4130_sp2020";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>
