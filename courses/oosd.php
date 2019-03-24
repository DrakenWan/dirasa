<!DOCTYPE html>
<?php
 include "../header.php";
?>
<html>
<head>
<title>Dirasa - For the students, by the students, of the students</title>

<!--ADD META TAGS BELOW THIS -->
<meta name="Author" value="Karry, Shubham">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<!-- ADD IN STYLESHEET LINKS HERE -->
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/authentication.css">

<!-- ADD EXTERNAL SCRIPT TAGS BELOW THIS -->
<script src="../scripts/mainjs.js"></script>
<script src="../scripts/navbar.js"></script>

<!-- some bootstrap stuff below -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- bootsrap stuff ends here -->



<style>
#listoffiles a
{
 text-decoration: none;
}

/****FILE upload categories ****/
.Images a:link
{
  color:#BB86FC;
}

.Documents a:link
{
	color: #00DAAA;
}

.Applications a:link
{
	color:#E8B600;
}

.Others a:link
{
	color: #405757;
}

/**** FILE upload categories code ends here ****/

/**** UPLOAD ICON ****/

input[type=file]
{
	background-color: #5EDEE5;
	border: 2px solid #5EDEE5;
	color: white;
	font-weight: solid;
	font-size: 15px;
}

#uploadicon
{
	height: 70px;
	width: 70px;
	margin-left: 50%;
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

/**** div details ****/

.details
{
	color: white;
	background-color: #E0AAFB;
	padding: 10px 5px 5px 10px;
	position: relative;
	width: 30%;
	box-shadow: 2px 4px 5px #888888;
}

/*** course get button ***/
.butt
{
  background-color: #E0AAFB;
  border-radius: 3px;
  width: 100px;
  height: 50px;
  padding: 5px 5px 5px 5px;
  font-size: 15px;
  text-align: center;
  font-weight: bold;
  color: white;
  margin-left: 50%;
}

.butt:hover
{
	background-color: #ddaaf7;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

/**** SUBJECT SELECTION MODAL/SELECT ****/
/* The Modal (background) */
.select {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1000000000; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.select-content {
    position: relative;
    background-color: #fefefe; /** FEFE by TreWay!!! Nicki Minaj **/
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close_select {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close_select:hover,
.close_select:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.select-header {
    padding: 2px 16px;
    background-color: #E0AAFB;
    color: white;
}

.select-body {padding: 2px 16px;}



/****SUBJECT SELECTION ENDS HERE ****/
</style>


</head>

<body style="background-color: #FFFBFE;">
<div id="navbardiv"> <!--navbar containing div -->
<!--- navbar below --->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	  <a class="navbar-brand" href="../welcome.php">
		<img style="height: 100px; margin-top: -10px;" src="../images/logo2pointo.png"/>
	  </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="../welcome.php"><?php if(!isset($_SESSION["username"])) {echo "dirasa";} else {echo "Home";}?></a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Community Portal</a></li>
	  <li  class="active"><a href="../courses.php">Courses</a></li>
      <li><a href="../contactus/contactus.php">Contact Us</a></li>
    </ul>
  </div>
</nav>
<!--- navbar ends -->
</div> 
<!-- navbar container div -->
<hr>
<img class="bannerheader" src="../images/setbanner.png"/>
<hr>

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
		  <p><b>Username</b>: <?php echo $_SESSION['username'].'<br>';?></p>
		  <p><b>Age:</b> <?php $age= round((time()-strtotime($_SESSION['dob']))/(60*60*24*365) - 0.5, 0); echo $age.'<br>'; ?></p>
		  <p><b>Credits:</b> <?php echo $_SESSION['credits'].'<br>';?></p>
		  <p><b>Designation:</b> <?php echo $_SESSION['design'].'<br>';?></p>
		  <p><b>Institution:</b>  <?php echo $_SESSION['institute'].'<br>';?></p>
	 </div>
	 <div  class="chodal_content_divs">
		<H1>hello</h1>
	 </div>
    </div>
    <div class="chodal-footer">
	  <div id="chodal_logout"><a class="modal-links" href="../redirect.php">Logout</a></div>
    </div>
  </div>

</div>

<!-- modal ends here -->

<h1> Object Oriented Software Development </h1>
<div class="container">
 
 <div class="description">
	<p>Object-oriented analysis and design (OOAD) is a popular technical approach for analyzing and designing an application, system, or business by applying object-oriented programming, as well as using visual modeling throughout the development life cycles to foster better stakeholder communication and product quality.</p>
	
 </div>
 
 <hr/>
 
 <div class="details">
	<?php
		
		include "../authenticate_header.php";
		$courseid = "OOC2001";
		$query = "SELECT * from course where course_id='$courseid'";
		$query_result = mysqli_query($conn,$query) or die("Error in query or accessing elements.");
		if(mysqli_num_rows($query_result)>0)
		{
			$row = mysqli_fetch_assoc($query_result);
			
			$courseid = $row['course_id'];
			$name = $row['name'];
			$prof = $row['professor_unamer'];
			$credit_cost = $row['credit_cost'];
			$_SESSION["credit_cost"] = $row['credit_cost'];
		}	
	?>
	<strong> Name: </strong> <?php echo $name;?>
	<br/><strong> Course Id: </strong> <?php echo $courseid;?>
	<br/><strong> Professor: </strong> <?php echo $prof;?>
	<br/><strong> Credits to be costed: </strong> <?php echo $credit_cost;?>
 </div>

 <hr/>
 <?php 
 
 if(isset($_SESSION['username']))
 { 
	 $uname = $_SESSION['username'];
	 //echo $uname;
	 $query1 = "select * from course_student where student_uname='$uname' and course_id='$courseid'"; 
	 $result_query1 = mysqli_query($conn, $query1) or die("query failed");
	if(!(mysqli_num_rows($result_query1)>0))
	{
		$buy = "<div class='butt' id='myBtn'>Buy the Course</div>";
		echo $buy;
		
		//below line will remove the file upload module from display
		echo "<style> #fileuploadmodule{ display: none;} #listoffiles{display:none;}</style> ";
	}
	else
	{
	  echo "<small><span style=\"background-color:red; color:white; font-weight: bold;\"> If you wish to remove this course you can contact us through the contact us page. However, your credits will not be returned.</span></small>";
	  
	}
 }
 
 else{ $else = "Please <a href=\"../welcome.php#loginbutt\">Login</a> to get access to this course or buy it.";
		echo "$else";
 die();}?>
 
 
<hr/>

<?php
	//SCRIPT FOR FILE UPLOADING MODULE
	
	$uploaded_files = "";
	Settings::$uploadFolder .= "/oosd";
	$message="";
   //Has the user uploaded something?
 
	if(isset($_FILES['file']) && $_POST['randcheck']==$_SESSION['rand'])
	{
	$subject_name = $_POST['subject'];
	$fileupload = $_FILES['file'];
	
	$target_path = Settings::$uploadFolder;
	$target_path = $target_path . "/".time() . '♀' . $_SESSION["username"]. '♀' . basename( $_FILES['file']['name']);
 

	//Try to move the uploaded file into the designated folder
        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
            $message = "The file ".  basename( $_FILES['file']['name']). 
            " has been uploaded";
			 if(empty($fileupload) === false)
			{
				$reward = 50;
				$uname = $_SESSION["username"];
				$sql="UPDATE user SET credits = credits + $reward where uname='$uname'";
				$result = mysqli_query($conn,$sql);
			}
        } 
		
		else{
            $message = "There was an error uploading the file, please try again!";
        }
}
//Open directory for reading
$dh = opendir(Settings::$uploadFolder);
//LOOP through the files
while (($file = readdir($dh)) !== false) 
{
 if($file != '.' && $file != '..')
 {
	$filename = Settings::$uploadFolder . $file;
	$filename = "./uploads/oosd/".$file;
	$parts = explode("♀", $file);
	$size = formatBytes(filesize($filename));
	$added = date("m/d/Y", $parts[0]);
	$origName = $parts[2];
	$author = $parts[1];
    $filetype = getFileType(substr($file, strlen($file) - 3));
	$uploaded_files .= "<li class=\"$filetype\"><a href=\".\\$filename\" target=\"_blank\">$origName</a> of size <small>$size</small> added on $added by $author</li>\n";
 }
}
closedir($dh);
if(strlen($uploaded_files) == 0)
{
    $uploaded_files = "<li><em>No files found</em></li>";
}

//Auxiliary Functions

//File type
function getFileType($extension)
{
    $images = array('jpg', 'gif', 'png', 'bmp', 'JPG', 'JPEG');
    $docs   = array('txt', 'rtf', 'doc', 'pdf');
    $apps   = array('zip', 'rar', 'exe', 'mp3');
   
    if(in_array($extension, $images)) return "Images";
    if(in_array($extension, $docs)) return "Documents";
    if(in_array($extension, $apps)) return "Applications";
	else return "Others";
}

//Turning into readable format for bytes
function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 
    
    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 
    
    $bytes /= pow(1024, $pow); 
    
    return round($bytes, $precision) . ' ' . $units[$pow]; 
} 

	include "../authenticate_header.php";
	$uname = $_SESSION["username"];
	$sql="select credits from user where uname='$uname'";
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$credits = $row['credits'];
		}
		
		$_SESSION["credits"] = $credits;
	}
   $rand = rand();
   $_SESSION["rand"] = $rand;?>
<!-- FILE UPLOADING MODULE FRONT END DESIGN HERE -->
	<div id="fileuploadmodule">
		<h3> Wish to upload a file for us to review? </h3>
		 <p> <i> Uploading a file gives you 50 credits. But after reviewing
				 the document we can also penalise you of credits if there is
				 something graphic or abusive in the content or redundancy in the uploads you gave. </i> </p>
		<fieldset style="border:1px solid grey; padding: 20px 20px 20px 20px">
        <form method="POST" action="<?php echo "$script_name";?>" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="100000000000000000000000000000000" readonly/>
		<input type="hidden" name="subject" value="oosd" readonly/>
        <input type="hidden" name="randcheck" value="<?php echo $rand; ?>" readonly/>
		
		<p><label for="file">Select file</label><br />
        <input type="file" id="file" name="file"/></p>
        <p><input type="image" alt="Submit" src="./images/uploadicon.png" id="uploadicon"/></p>
        </form>   
    </fieldset>
	<div> <?php echo $message; ?></div>
	</div>
	
<!-- FILE UPLOADING MODULE DESIGN ENDS HERE -->

<!-- FILES UPLOADED BY USER DISPLAYED HERE -->
	<div id="listoffiles">
		<h1> Uploaded Files </h1>
		<ul id="files">
	  <?php echo $uploaded_files; ?>
    </ul>
	</div>
</div>

<div>

</div>

<!-- SUBJECT SELECTION MODAL -->
<div id="myselect" class="select">

  <!-- Modal content -->
  <div class="select-content">
    <div class="select-header">
      <span class="close_select">&times;</span>
      <h2><?php echo $name;?></h2>
    </div>
    <div class="select-body">
	<form method="POST" name="buycourse" action="./buycourse.php">
	<?php
	
		  $u = $_SESSION['username'];
			$q = "SELECT * from course_student where course_id='$courseid' and student_uname='$u'";
			$result=mysqli_query($conn,$q);
			if(mysqli_num_rows($result)>0)
			{
			  $message = "Already Registered this course.";
			}
			else
			{
			 $message = "<p>Credits Costed: $credit_cost</p><p style=\"font-size:15px;\">Are you sure? <button name=\"yesbutton\" class=\"btn\" style=\"font-size: 15px;width: 100px; text-align:center; color:white; font-weight:bold\" value=\"$courseid\">YES</button>";
			}
		
		echo "$message";
	?>
	</form>
	
	
    </div>
    
  </div>

</div>
<!-- SUBJECT SELECTION MODAL ENDS HERE-->

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

/****script for subject selection modal ****/
// Get the modal
var select = document.getElementById('myselect');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close_select")[0];

// When the user clicks on the button, open the modal 
btn1.onclick = function() {
    select.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    select.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        select.style.display = "none";
    }
}
/*** scirpt for subject selection modal ends here ****/
</script>
</html>