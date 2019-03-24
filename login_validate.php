<?php
  //login validate php file
	include "header.php";
	include "authenticate_header.php";

	$name=$_POST["email"];
	$pwd = hash("sha256",md5($_POST["psw"]));
	$redirect_link = $_POST["redirect"];
	$sql="SELECT * FROM user WHERE uname='$name' OR email='$name' AND password='$pwd'";
	$result=mysqli_query($conn,$sql) or die("Error in query or accessing elements.");

	if(mysqli_num_rows($result)>0)
		{
			$row = mysqli_fetch_assoc($result);
			
			session_start();
			$_SESSION["username"] = $row['uname'];
			$_SESSION["password"] = $pwd;
			$_SESSION["logged_in"] = 1;
			
			$result = mysqli_query($conn, "SELECT * FROM user WHERE uname ='$name' OR email='$name'");
			while($row = mysqli_fetch_assoc($result))
			{
				$fullname = $row['name'];
				$credits = $row['credits'];
				$int = $row['institute'];
				$occ = $row['occupation'];
				$dob = $row['dob'];
			}
			
			$_SESSION["name"] = $fullname;
			$_SESSION["credits"] = $credits;
			$_SESSION["institute"] = $int;
			$_SESSION["design"] = $occ;
			$_SESSION["dob"] = $dob;
			header("Location:$redirect_link");
		}
	else
	{
		echo "<h2 style=\"color:red;\">Login Failed!</h2> Redirecting to <a href=\"welcome.php\">Homepage</a>. If you are not redirected to the homepage click on the link.";
		header('Refresh: 2; URL=welcome.php');
	}
?>