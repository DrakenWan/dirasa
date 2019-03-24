<?php
	session_start();
    include "../authenticate_header.php";
	$uname = $_SESSION['username'];
	$ucode = $_POST['yesbutton'];
	$cost = $_SESSION["credit_cost"];
	$coursebuy = "update user set credits = credits - $cost where uname='$uname';insert into course_student values('$uname', '$ucode')";
	if($result=mysqli_multi_query($conn,$coursebuy) or die("Failed to change"))
	{
		 echo "Course bought successfully! Taking you to homepage in 5 seconds.";
		 header('Refresh: 5; URL=../welcome.php');
	}
?>