<?php
 class Settings
{
    static $password = "mypassword";
    static $uploadFolder = "./uploads/";
}

 function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

 session_start();
 $login_script = "login_validate.php";
 $signup_script = "signup_validate.php";
 $script_name = $_SERVER['SCRIPT_NAME'];
 $infinite_time = 9999999999999999999999999999999999999999999999999999999999999999999;
 $initial_credit_value = 10000;
 $dispnone = "display:none";
 
 /* FOR TESTING PURPOSES 
 if(isset($_COOKIE[getRealIpAddr()]))
 {
	$_SESSION["username"] = $_COOKIE[getRealIpAddr()][0];
	$_SESSION["password"] = $_COOKIE[getRealIpAddr()][1];
	header("Location: welcome.php");
 } */
 ?>