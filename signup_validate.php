<?php
		include "authenticate_header.php";
		
		$name=$_POST["username"];
		$p=hash("sha256",md5($_POST["password"]));
		$n=$_POST["name"];
		$em=$_POST["email"];
		$d = $_POST["dob"];
		$occ = $_POST["occupation"];
		$inst = $_POST["institute"];
		$gender = $_POST["gender"];
		$credits = $initial_credit_value;
		$redirect_link = $_POST["redirect"];
		//TESTING PURPOSES echo "$name, $p, $n, $em, $d, $occ, $inst";
		
		/* TESTING PURPOSES ON DIFFERENT CLIENTS
 		if($_POST["remember"] == "yes")
		{
			$cookie_name = $name;
			$cookie_value = array($name, $_POST["password"]);
			setcookie(getRealIpAddr(), $cookie_value, time() + (86400 * 30), "/");
			//86400 = 1 day
		} */
		
		$sql_check_uname = "SELECT * from user where uname='$name'";
		
		$result_user = mysqli_query($conn, $sql_check_uname);
		
		if( !empty(@mysqli_fetch_assoc($result_user)) )
		{
			echo "<h1 style=\"color:red;\"> Failed Signup </h1>";
			echo "<p style=\"font-size:30px;\"> The username already exists or the email already exists.";
			echo "Taking back to homepage. If it doesnt redirect click <a href='welcome.php'>here</a><br><br>";
			header('Refresh: 5; URL=welcome.php');
		}
		
		$sql="INSERT into user VALUES ('$name','$p','$em', '$d', '$n', '$inst', '$occ', '$credits', '$gender')";
		$result=mysqli_query($conn,$sql);
		if($result){
			session_start();
			$_SESSION['logged_in'] = 1;
			$_SESSION["username"] = $name;
			$_SESSION["email"] = $em;
			$_SESSION["password"] = $p;
			$_SESSION["name"] = $n;
			$_SESSION["credits"] = $credits;
			$_SESSION["design"] = $occ;
			$_SESSION["institute"] = $inst;
			$_SESSION["dob"] = $d;
			header("Location:$redirect_link");
		}
		else
		{
		echo "Redirecting to homepage... "."<br>"."Query failed : Invalid Input  ".mysqli_errno($conn);
		header('Refresh: 2; URL=welcome.php');
		}

?>