<!-- teser -->
<?php
    function check_plag($filename)
	 {
	   $file = fopen($filename, 'r');
	   $filedata = fread($file, filesize($filename));
	   $filedata = md5($filedata);
	   fclose($file);
	   
	   $dir = './uploads/';
	   
	   $files = scandir($dir);
	   $i=2;
	   while($files)
	    {
		 $names = $dir.$files[$i];
		 $file = fopen($names, 'r');
		 $temp_data=fread($file, filesize($names));
		 $temp_data=md5($filedata);
		 fclose($file);
		 
		 if($temp_data == $filedata)
		  return 0;
	    }
	  return 1;
	 }
	//SCRIPT FOR FILE UPLOADING MODULE
	include "../header.php";
	$uploaded_files = "";
	Settings::$uploadFolder .= "";
	$message="";
   //Has the user uploaded something?
 
	if(isset($_FILES['file']) && $_POST['randcheck']==$_SESSION['rand'])
	{
	$subject_name = $_POST['subject'];
	$fileupload = $_FILES['file'];
	
	$target_path = Settings::$uploadFolder;
	$target_path = $target_path . "/".time() . '♀' . $_SESSION["username"]. '♀' . basename( $_FILES['file']['name']);
    
	$finame = $_FILES['file']['tmp_name'];
	if(check_plag($finame))
	 {
	//Try to move the uploaded file into the designated folder
        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
            $message = "The file ".  basename( $_FILES['file']['name']). 
            " has been uploaded";
			 if(empty($fileupload) === false)
			{
				
			}
        }
      		
		
		else{
            $message = "There was an error uploading the file, please try again!";
        }
		
	}
	else
	 {
	  $message = "Plagiarised the shit!";
	  
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
	$filename = "./uploads/".$file;
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
    $images = array('jpg', 'gif', 'png', 'bmp');
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
