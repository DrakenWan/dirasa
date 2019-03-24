<?php
    $initial_credit_value = 10000;
	//db connect 
	$host="localhost";
	$dbuser="root";
	$conn= new mysqli($host,$dbuser,"KKK1998*");
	mysqli_select_db($conn,"dirasa");

	if(mysqli_connect_errno())
		{
			@die("<h2 style=\"color:red\">Connection failed! Error no: ".mysqli_connect_errno()."<h2>");
		}
		
?>