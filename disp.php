<?php
 //include "file_constants.php";
 // just so we know it is broken
 error_reporting(E_ALL);
 // some basic sanity checks
 if(isset($_GET['id']) && is_numeric($_GET['id'])) {
     //connect to the db
$db= mysqli_connect("localhost","root","","authentication");

     // get the image from the db
     $sql = "SELECT image FROM test_image WHERE id=" .$_GET['id'] . ";";

     // the result of the query
     $result = mysqli_query($db,"$sql") or die("Invalid query: " . mysql_error());

     // set the header for the image
     header("Content-type: image/jpeg");
     echo mysql_result($result, 0);

     // close the db link
     mysql_close($link);
 }
 else {
     echo 'Please use a real id number';
 }
?>