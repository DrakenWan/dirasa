<html>

<?php
session_start();
$link = $_POST["redirect_link"];
if(session_destroy()){
header("Location:$link");
}
?>

</html>