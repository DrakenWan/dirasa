<!DOCTYPE html>
<?php
 include "./header.php";
 //$page_link = "./forum.php";
?>
<html>
<head>
<title>Dirasa - For the students, by the students, of the students</title>

<!--ADD META TAGS BELOW THIS -->
<meta name="Author" value="Karry, Shubham">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">


<!-- ADD IN STYLESHEET LINKS HERE -->
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/authentication.css">

<!-- ADD EXTERNAL SCRIPT TAGS BELOW THIS -->
<script src="scripts/mainjs.js"></script>
<script src="scripts/navbar.js"></script>
<script src="scripts/authentication.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	
<!-- some bootstrap stuff below -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- bootsrap stuff ends here -->

<style>

/**** CONTACT FORM CODE ****/

/*//////////////////////////////////////////////////////////////////
[ FONT ]*/

@font-face {
  font-family: JosefinSans-Bold;
  src: url('../fonts/JosefinSans/JosefinSans-Bold.ttf'); 
}

@font-face {
  font-family: Oswald-Medium;
  src: url('../fonts/oswald/Oswald-Medium.ttf'); 
}

/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}


a {
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
}


ul, li {
	margin: 0px;
	list-style-type: none;
}

/****contact form code ends here ****/

/**** PROFILE BAR VIEWER CODE ****/
.chodal
{
	display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
}

.chodal-content {
    position: fixed;
    bottom: 0;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
}

/* The Close Button */
.close_chodal {
    color: white;
    float: right;
    font-size: 50px;
    font-weight: bold;
}

.close_chodal:hover,
.close_chodal:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.chodal-header {
    padding: 2px 16px;
    background-color: #FED300;
    color: white;
}

.chodal-body {padding: 2px 16px;}

.chodal-footer {
    padding: 2px 16px;
    background-color: #47d1d1;
    color: white;
}


/* Add Animation */
@-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

@keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

.modal-links:link, .modal-links:visited
{
	background-color: #f44336;
    color: white;
    padding: 10px 20px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
}

.logout_button_on_profile
{
	background-color: #f44336;
    color: white;
    padding: 10px 20px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
	border: 2px solid #f44336;
	
}

.logout_button_on_profile:hover
{
	background-color:#ce382d;
	border: 2px solid #ce382d;
}
.modal-links:hover
{
	background-color:#ce382d;
}

#chodal_logout
{
  padding: 10px 20px;
}

.chodal_content_divs
{
	width: 50%;
	position: inherit;
	display:block; 
	margin-top: 5px;
	border:5px solid #FED300;
}

#chodal_info_user
{
	margin: 5px 5px 5px 5px;
	
}

#chodal_col1
{
	font-weight: bold;
}

#chodal_col2
{
	text-align: right;
}
/**** Profile Bar viewer Ends here ****/

/**** banner header ****/
.bannerheader
{
	user-drag: none; 
	user-select: none;
	-moz-user-select: none;
	-webkit-user-drag: none;
	-webkit-user-select: none;
	-ms-user-select: none;
}

/**** BANNER HEADER CODE ENDS HERE ****/

/**** content2 ****/
#content2
{
	margin-left: 20px;
}

</style>


</head>

<body>
<div id="navbardiv"> <!--navbar containing div -->
<!--- navbar below --->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	  <a class="navbar-brand" href="./welcome.php">
		<img style="height: 100px; margin-top: -10px;" src="./images/logo2pointo.png"/>
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="./welcome.php"><?php if(!isset($_SESSION["username"])) {echo "dirasa";} else {echo "Home";}?></a></li>
      <li><a href="#">About Us</a></li>
      <li class="active"><a href="forum.php">Community Portal</a></li>
	  <li><a href="./courses.php">Courses</a></li>
      <li><a href="./contactus/contactus.php">Contact Us</a></li>
    </ul>
  </div>
</nav>
<!--- navbar ends -->
</div> <!-- navbar container div -->

<hr>
<img class="bannerheader" src="images/setbanner.png"/>
<hr>



<!-- below code will display the profile button if signed in -->
<?php
 if(!isset($_SESSION["username"]))
  {
	$login_btn =  "<button id=\"loginbutt\"class=\"open-button\" onclick=\"openForm()\">Log in?</button>";
	$signup_btn = "<button class=\"open-button2\" onclick=\"document.getElementById('id01').style.display='block'\" style=\"width:auto;\">Sign Up</button>";
	
	//the below line will make the login and signup buttons visible
	//or else they will be replaced with profile bar
	echo $login_btn, $signup_btn;
  }
  if(isset($_SESSION["username"]))
	{
		$profile_btn =  "<button class=\"open-button\" id=\"myChodeBtn\">Profile</button>";
		echo $profile_btn;
		
	}
?>

<!-- The login form -->
<div class="form-popup" id="myForm">
  <form method="POST" action="<?php echo $login_script ?>" class="form-container">
    <h1 style="margin-left:75px;">LOGIN</h1>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" id="psw" placeholder="Enter Password" name="psw" required>
	
	<input type="hidden" id="redirect" name="redirect" value="forum.php" />
	<input id="chickbox_login" type="checkbox" onclick="showpassword()">
	<label for="chickbox_login"><b>show password</b></label>
    <button type="submit" class="btn1"><b>Login</button>
    <button type="button" class="btn_cancel" onclick="closeForm()">Close</b></button>
	
  </form>
</div>

<!-- Signup pop up form -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="closeform" title="Close Modal">&times;</span>
  <form name="signup_form" enctype="multipart/form-data" method="POST" class="modal-content" action="<?php echo $signup_script; ?>">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
	  <p style="font-size: 15px; color:red;"><strong>Please check for errors before clicking SUBMIT!</strong></p>
      <hr>
	  <label for="uname"><b>Username</b>*</label>
	  <input type="text" placeholder="unique username" name="username" id="uname" required>
	  
	  <label for="name"><b>Name</b>*</label> 
	  <input type="text" placeholder="Your full name" name="name" id="name" required>
	  
      <label for="eml"><b>Email</b>*</label> 
      <input type="text" placeholder="Enter Email" name="email" id="eml" required>
	 
	 <b>Gender*:</b>
	 <fieldset style="padding: 10px 10px 10px 10px; border:1px solid gray">
	 <br/>
	  <input type="radio" name="gender" id="male" value="Male">
	  <label for="male">Male</label>
	  <br/>
	  <input type="radio" name="gender" id="fem" value="Female">
	  <label for="fem">Female</label>
	  <br/>
	  <input type="radio" name="gender" id="nbr" value="Non-Binary">
	  <label for="nbr">Non-Binary</label>
	  <br/>
	  <input type="radio" name="gender" id="uns" value="Unspecified">
	  <label for="uns">Unspecify</label>
	  <br/>
	  </fieldset>
	  <br>
	  <label for="dob"><b>Date of Birth</b>*</label><br> 
	  <input class="karry_signup" type="date" name="dob" id="dob" required><br><br>
	  
	  <label for="inst"><b>Institution Name</b>  <small><i>The place where you study or teach</i></small></label>
	  <input type="text" name="institute" id="inst" value="undefined">
	  
	  <label for="occ"><b>Occupation</b>*</label> <br>
	  <select class="karry_signup" id="occ" name="occupation">
	    <option value="student">Student</option>
		<option value="professor">Professor</option>
	  </select>
	  <br><br>
      <label for="pswd"><b>Password</b>*</label>
      <input type="password" placeholder="Enter Password" name="password" id="pswd"  onkeyup='check();' required>

      <label for="pswd-repeat"><b>Repeat Password</b>*</label>
      <input type="password" placeholder="Repeat Password" name="confirm_password" id="pswd-repeat"  onkeyup='check();' required>
      <span id="message"></span><br>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" value="yes"> Remember me
      </label>
	   <input type="hidden" name="redirect" id="redirect" value="forum.php" />
		<hr>
      <p>By creating an account you agree to our <a target="_blank" href="./privacypol.php" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <b><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" onmouseover="validate_signup()" class="signupbtn">Sign Up</button></b>
      </div>
    </div>
  </form>
</div>

<!--button code ends here PROFILE -->
<!-- The Modal -->
<div id="myChodal" class="chodal">

  <!-- Modal content -->
  <div class="chodal-content">
    <div class="chodal-header">
      <span class="close_chodal">&times;</span>
      <h2>Welcome, <?php echo $_SESSION['name']."!" ?></h2>
    </div>
    <div class="chodal-body">
     <div class="chodal_content_divs"> 
	 <table id="chodal_info_user">
	  <tr>
			<td id="chodal_col1">Username</td>
			<td id="chodal_col2"><?php echo $_SESSION['username'].'<br>';?></td>
	  </tr>
	  
	  <tr>
			<td id="chodal_col1">Age</td>
			<td id="chodal_col2"><?php $age= round((time()-strtotime($_SESSION['dob']))/(60*60*24*365) - 0.5, 0); echo $age.'<br>'; ?></td>
	  </tr>
	  
	  <tr>
			<td id="chodal_col1">Credits</td>
			<td id="chodal_col2"><?php echo $_SESSION['credits'].'<br>';?></td>
	  </tr>
	  
	  <tr>
			<td id="chodal_col1">Designation</td>
			<td id="chodal_col2"><?php echo $_SESSION['design'].'<br>';?></td>
	  </tr>
	 
	  <tr>
			<td id="chodal_col1">Institution</td>
			<td id="chodal_col2"><?php echo $_SESSION['institute'].'<br>';?></td>
	  </tr>
	  
	 </table>
	 </div>
	 
    </div>
	<!-- logout button -->
    <div class="chodal-footer"> 
	  <form action="./redirect.php" method="post" id="logout">
	   <div id="chodal_logout">
	    <input type="hidden" name="redirect_link" id="redirect_link" value="./forum.php">
		<input class="logout_button_on_profile" type="submit" value="Logout">
	   </div>
	  </form>
    </div>
	<!-- logout button ends-->
	
  </div>

</div>



<script>
/****chodal profile viewer ****/

var chodal = document.getElementById('myChodal');

// Get the button that opens the modal
var btn = document.getElementById("myChodeBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close_chodal")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    chodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    chodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == chodal) {
        chodal.style.display = "none";
    }
}

/**** script for chodal/modal ends here  ****/
</script>
</html>