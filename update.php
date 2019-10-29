<?php
session_start();
if(isset($_SESSION['username']))
{
	$usrnme=$_SESSION['username'];
$db= mysqli_connect("localhost","root","","authentication");
if(isset($_POST['save_btn']))
{
	$name=mysqli_real_escape_string($db,$_POST['name']);
	$batch=mysqli_real_escape_string($db,$_POST['batch']);
	$university=mysqli_real_escape_string($db,$_POST['university']);
	$company=mysqli_real_escape_string($db,$_POST['company']);
	$address=mysqli_real_escape_string($db,$_POST['address']);
	$mail=mysqli_real_escape_string($db,$_POST['mail']);
	$contact=mysqli_real_escape_string($db,$_POST['contact']);
		$sql1="insert into form(username) values ('$usrnme')";
		mysqli_query($db,$sql1);
		$sql="UPDATE form set name='$name',batch='$batch',university='$university',company='$company',address='$address',mail='$mail',contact='$contact' where username='$usrnme'";
		mysqli_query($db,$sql);
		header("location:update.php");
}
}
?>
<html>
<head>
<link href="div.css" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
<title>PHP User Registration Form</title>
<style>
body{
	width:100%;
	height:100%;
	font-family:Arial Black;
	background:violet;
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	
	background:white;
	width: 100%;
	height:75%;
	border-spacing: initial;
	margin: 2px 10px;
	word-break: break-word;
	table-layout: auto;
	line-height: 100%;
	color: blue;
	border-radius: 4px;
	padding: 20px 40px;
}
.demo-table {
	
	background-image: url('alumni 3.png');
	width: 100%;
	height:75%;
	border-spacing: initial;
	margin: 2px 10px;
	word-break: break-word;
	table-layout: auto;
	line-height: 100%;
	color: blue;
	border-radius: 4px;
	padding: 20px 40px;
}
.demo-table td {
	padding: 15px 0px;
}
.demoInputBox {
	padding: 10px 100px;
	border: #a9a9a9 5px solid;
	border-radius: 80px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: limegreen;
	border: 0;
	color: black;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
</style>
</head>
<body>
<p><center><fs><d4>KUET ALUMNI</d4></fs></center></p>
<p><center><d6>Update your informtion</d6></center></p>
<form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<td>Username</td>
<td><input type="text" class="demoInputBox" name="username" value="<?php echo $_SESSION['username']?>"></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" class="demoInputBox" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"></td>
</tr>
<tr>
<td>Batch</td>
<td><input type="text" class="demoInputBox" name="batch" value="<?php if(isset($_POST['batch'])) echo $_POST['batch']; ?>"></td>
</tr>
<tr>
<td>Higher Study</td>
<td><input type="text" class="demoInputBox" name="university" value="<?php if(isset($_POST['userUniversity'])) echo $_POST['userUniversity']; ?>"></td>
</tr>
<tr>
<td>Present Company</td>
<td><input type="text" class="demoInputBox" name="company" value="<?php if(isset($_POST['userCompany'])) echo $_POST['userCompany']; ?>"></td>
</tr>
<tr>
<td>Presrent Address</td>
<td><input type="text" class="demoInputBox" name="address" value="<?php if(isset($_POST['userAddress'])) echo $_POST['userAddress']; ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="mail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
</tr>
<tr>
<td>Contact Number</td>
<td><input type="password" class="demoInputBox" name="contact" value=""></td>
</tr>

<td colspan=2>
<input type="submit" name="save_btn" value="Save" class="btnRegister"></td>
</tr>
</table>
</form>


<h3><center>Set Your Profile Picture</center></h3>
<br>
<form enctype="multipart/form-data" action=
"<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<center><input class="btn btn-info" name="userfile" type="file" /><br></center>
<center><input class="btn btn-primary btn-lg" type="submit" value="Submit" /></center>
</form>

<?php

	$usrnme=$_SESSION['username'];
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
					if(isset($_SESSION['username']))
					{
					$usrnme=$_SESSION['username'];
                    $sql = "INSERT INTO pic
                    (username,image, name)
                    VALUES
                    ('$usrnme','{$imgData}', '{$_FILES['userfile']['name']}');";

                    // insert the image
                    mysqli_query($db,$sql) or die("Error in Query: " . mysql_error());
                    $msg='<p>Image successfully saved in database with id ='. mysqli_insert_id($db).' </p>';
					}
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



</body></html>