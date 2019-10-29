<?php
session_start();
?>

<html>
<head>
<style>
	ul
{
	margin: 0px;
	padding: 0px;
	list-style: none;
}

ul li
{
	float: left;
	height: 40px;
	width: 179px;
	opacity: 5;
	line-height : 40px;
	text-align: center;
	font-size: 15px;
}
 ul li a
 {
	 text-decoration: none;
	 color: black;
	 display: block;
 }
 ul li a:hover
 {
	background-color : black;
	 
 }
 ul li ul li
 {
	 display: none;
 }
 ul li:hover ul li
 {
	 display: block;
 }
 </style>
 </head>
<body background="fondo-abstracto-blanco-con-textura-ondulada_1048-5077.jpg">

    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.kuet.ac.bd">
                	 
                	<p style="color:blue;"><b>KUET<b><p>
                </a>
            </div>
			<form class="navbar-form navbar-left">
    </form>
			
			
			
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="hme.php">Home</a>
                    </li>
                    <li><a> <p style="color:violet;">Welcome <?php echo $_SESSION['username'] ?></p> </a>
 <ul>
 <li><a href="profile.php">View Information</a></li>
 <li><a href="newinfo.php">Change Password</a></li>
 </ul>
 </li>

                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</body>	
</html>

<?php
//session_start();

$db= mysqli_connect("localhost","root","","authentication");

if(isset($_POST['post_btn']))
{
	$heading=mysqli_real_escape_string($db,'<h2><font color="blue">') .mysqli_real_escape_string($db,$_POST['heading']).mysqli_real_escape_string($db,'</font></h2>');
	$comment=mysqli_real_escape_string($db,$_POST['comment']);
	
		$sql="INSERT INTO events(heading,comment) VALUES('$heading','$comment')";
		mysqli_query($db,$sql);
		//header("location:event.php");
}

if(isset($_POST['ed_btn']))
{
		$hdng=mysqli_real_escape_string($db,'<h2><font color="blue">') .mysqli_real_escape_string($db,$_POST['hdng']).mysqli_real_escape_string($db,'</font></h2>');
		$dtl=mysqli_real_escape_string($db,$_POST['dtl']);
		$sql="UPDATE events SET comment='$dtl' where heading='$hdng'";
		mysqli_query($db,$sql);
}
if(isset($_POST['del_btn']))
{
		$hdng=mysqli_real_escape_string($db,'<h2><font color="blue">') .mysqli_real_escape_string($db,$_POST['hdng']).mysqli_real_escape_string($db,'</font></h2>');
		$sql="DELETE from events where heading='$hdng'";
		mysqli_query($db,$sql);
}	

echo "<center><d5><fs>KUET ALUMNI</fs></d5></center>";
echo '<marquee behavior="scroll" direction="left"><d6><h4><b>Dedicated for our alma-matter</b></h4></d6></marquee><br>';

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<tr style='width: 650px; border: 5px red;'><center> " . parent::current(). "</tr>";
    }

    function beginChildren() { 
        echo "<td>"; 
    } 

    function endChildren() { 
        echo "</td>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "authentication";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT heading,comment,newline FROM events"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
	echo "</p>
	<center>
					<form class='delete-form' method='POST'>
					<input type='text' name='hdng' placeholder='Type heading name to delete event' value='".$row['heading']."'>
		        	<button type='submit' name='del_btn' >DELETE</button>
					</form>
		        	<form class='edit-form' method='POST'>
					<input type='text' name='hdng' placeholder='Type heading name to edit event' value='".$row['heading']."'>
					<input type='text' name='dtl' placeholder='New Details' value='".$row['heading']."'>
		        	<button type='submit' name='ed_btn' >EDIT</button>
					</form>
		        
	</center>        </div>";

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

?>

<html>
<head>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
	<link href="div.css" rel="stylesheet"> 

</head>
<body>

<br>
<br>
<br>

<center><b><d4><f20>Want to Share Something ?? &nbsp &#160 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Want to Upoad a Photo ??</f20></d4></b></center>
<br>
<form name="frmRegistration" method="post" action="">
<div class="col-sm-7 slideanim">

<textarea class="form-control" id="comments" name="heading" placeholder="Heading" rows="1" value=""></textarea><br>

<textarea class="form-control" id="comments" name="comment" placeholder="Details" rows="5" value=""></textarea><br>

      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary btn-lg" type="submit" name="post_btn" id="cnt-button" value="Save">Share</button>
        </div>
      </div>
    </div>
</form>	
	

<h3>&nbsp &nbsp &nbsp &nbsp &nbsp Please Choose a File and click Submit</h3>
<br>
<form enctype="multipart/form-data" action=
"<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<center><input class="btn btn-info" name="userfile" type="file" /><br></center>
<center><input class="btn btn-primary btn-lg" type="submit" value="Submit" /></center>
</form>

<?php

// check if a file was submitted
if(!isset($_FILES['userfile']))
{
    //echo '<p>Please select a file</p>';
}
else
{
    try {
    $msg= upload();  //this will upload your image
    echo $msg;  //Message showing success or failure.
    }
    catch(Exception $e) {
    echo $e->getMessage();
    echo 'Sorry, could not upload file';
    }
}

// the upload function

function upload() {
    //include "file_constants.php";
    $maxsize = 10000000; //set to approx 10 MB

    //check associated error code
    if($_FILES['userfile']['error']==UPLOAD_ERR_OK) {

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {    

            //checks size of uploaded image on server side
            if( $_FILES['userfile']['size'] < $maxsize) {  
  
               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']),"image")===0) {    

                    // prepare the image for insertion
                    $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));

                    // put the image in the db...
                    // database connection
                    $db= mysqli_connect("localhost","root","","authentication");
                    // our sql query
                    $sql = "INSERT INTO test_image
                    (image, name)
                    VALUES
                    ('{$imgData}', '{$_FILES['userfile']['name']}');";

                    // insert the image
                    mysqli_query($db,$sql) or die("Error in Query: " . mysql_error());
                    $msg='<p>Image successfully saved in database with id ='. mysqli_insert_id($db).' </p>';
                }
                else
                    $msg="<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['userfile']['name'].' is '.$_FILES['userfile']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['userfile']['error']);
    }
    return $msg;
}

// Function to return error message based on error code

function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}
?>

</body>
</html>

<?php
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo '<br>';
		$db= mysqli_connect("localhost","root","","authentication");
		$get_pro = "select * from test_image";
		$run_pro = mysqli_query($db, $get_pro);
		while($row_pro=mysqli_fetch_array($run_pro)){
			$pro_name = $row_pro['name'];
		echo "<img src='$pro_name' width='180' height='180' />";echo '<br>';}
?>