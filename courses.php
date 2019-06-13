<!DOCTYPE html>
<?php
 include "header.php";
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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

/** Changing the body's height to 1200 for now **/
#hotbody
{
  height: 1200px;
}

/**** THE MODAL FOR THE COURSE SELECTION ****/
/* The Modal (background) */
.coursemodal {
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
}

/* Modal Content/Box */
.coursemodal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close_coursemodal {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close_coursemodal:hover,
.close_coursemodal:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

/**** COURSE MODAL ENDS HERE ****/

/**** Course ****/
#coursename{
	font-size: 20px;
}

</style>
</head>

<body id="hotbody">

<div id="navbardiv"> <!--navbar containing div -->
<!--- navbar below --->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	  <a class="navbar-brand" href="./welcome.php">
		<img style="height: 100px; margin-top: -10px;" src="images/logo2pointo.png"/>
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="welcome.php"><?php if(!isset($_SESSION["username"])) {echo "dirasa";} else {echo "Home";}?></a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="./forum.php">Community Portal</a></li>
	  <li class="active"><a href="<?php echo $script_name;?>">Courses</a></li>
      <li><a href="contactus/contactus.php">Contact Us</a></li>
    </ul>
  </div>
</nav>
<!--- navbar ends -->
</div> <!-- navbar container div -->

<hr/>
<img class="bannerheader" src="images/setbanner.png"/>
<hr/>


<!-- below code will display the profile button if signed in -->
<?php
  if(isset($_SESSION["username"]))
	{
		$profile_btn =  "<button class=\"open-button\" id=\"myChodeBtn\">Profile</button>";
		echo $profile_btn;
		
	}
?>

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
    <div class="chodal-footer">
	  <div id="chodal_logout"><a class="modal-links" href="./redirect.php">Logout</a></div>
    </div>
  </div>

</div>

<div class="w3-container">
  <h2 style="font-family:serif; font-weight:bold;" align="center">Courses</h2>
  
  <a href="./courses/oosd.php">
  <div  class="w3-card-4 " style="width:20%; display:inline-block; margin: 20px 20px 0px 20px;">
    <img src="images/courses/oosd.png" alt="oosd" style="width:100%">
    <div class="w3-container w3-center ">
      <p id="coursename">Object Oriented Software Development</p>
    </div>
  </div></a>
  
  <a href="./courses/cryptography.php">
  <div class="w3-card-4" style="width:20%; display:inline-block; margin: 20px 20px 0px 20px;">
    <img src="images/courses/cryptography.png" alt="cryptography" style="width:100%">
    <div class="w3-container w3-center">
      <p id="coursename">Cryptography: An Introduction</p>
    </div>
  </div></a>
  
  
  <a href="./courses/codesign.php">
  <div class="w3-card-4" style="width:20%; display:inline-block; margin: 20px 20px 0px 20px;">
    <img src="images/courses/codesign.png" alt="codesign" style="width:100%;height:295px;">
    <div class="w3-container w3-center">
      <p id="coursename">Software Hardware Co-design</p>
    </div>
  </div></a>
  
  <a href="./courses/neuralnet.php">
  <div class="w3-card-4" style="width:20%; display:inline-block; margin: 20px 20px 0px 20px;">
    <img src="images/courses/neuralnet.png" alt="NeuralNetworks" style="width:100%">
    <div class="w3-container w3-center">
      <p id="coursename">Neural Networks</p>
    </div>
  </div></a>
  
  <a href="./courses/dsa.php">
  <div class="w3-card-4" style="width:20%; display:inline-block; margin: 20px 20px 0px 20px;">
    <img src="images/courses/img_snowtops.jpg" alt="Norway" style="width:100%">
    <div class="w3-container w3-center">
      <p id="coursename" >Data Structure and Algorithm</p>
    </div>
  </div></a>
  
  <div class="w3-card-4" style="width:20%; display:inline-block; margin: 20px 20px 0px 20px;">
    <img src="images/courses/img_snowtops.jpg" alt="Norway" style="width:100%">
    <div class="w3-container w3-center">
      <p id="coursename">Literature Uno</p>
    </div>
  </div>
  
  <div class="w3-card-4" style="width:20%; display:inline-block; margin: 20px 20px 0px 20px;">
    <img src="images/courses/img_snowtops.jpg" alt="Norway" style="width:100%">
    <div class="w3-container w3-center">
      <p></p>
    </div>
  </div>
</div>

</body>


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
