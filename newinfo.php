<?php
session_start();
if(isset($_POST['post_btn']))
{
$pss=md5($_POST['pass1']);
if($pss==$_SESSION['password'])
{
$username=$_SESSION['username'];

$pass2=md5($_POST['pass2']);
$pass3=md5($_POST['pass3']);
// Create connection
$db=mysqli_connect("localhost","root","","authentication");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
if($pass2==$pass3)
{
$sql = "UPDATE users SET password='$pass2' WHERE username='$username'";
}
if (mysqli_query($db, $sql)) {
	$_SESSION['password']=$pass2;
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysql_error($conn);
}

mysqli_close($db);
}
else
{
	echo "Password is Given Incorrect...";
}
}
?>

<html>

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet"> 
<style>
body
{
	background-image:url('abstract-bubbles-ppt-backgrounds-powerpoint-1024x576.jpg');
	background-color: black;
	background-repeat:no-repeat;
    background-size:cover;
    height:100%;
}
#frm
{
	border: solid gray 1px;
	width: 80%;
	height:70%;
	border-radius: 5px;
	margin: 100px auto;
	background: rgba(0,0,0,0.5);
	padding: 50px;
}
#frm input
{
	background: transparent;
}
td
{
	color: white;
	font-weight: bolder;
}
p
{
	color: white;
	font-weight: bolder;
}
#btn
{
	color : white;
	background : blue;
	padding: 5px;
	margin-left : 69%;
}

#h1
{
	color : blue;
	padding: 5px;
	margin-bottom : 50%;
}

#h5
{
	color : blue;
	padding: 5px;
	margin-bottom : 50%;
}
</style>
</head>
<script type="text/javascript">
function chk_frm_s(frm)
{
  var c=0; 
   
   document.getElementById("chk_pass").innerHTML="";
  if (frm.pass2.value.length==0)
  {
  	document.getElementById("chk_pass").innerHTML="<br/>Enter New Password!";
  	c=1;
  }
  
  document.getElementById("chk_pass1").innerHTML="";
  if (frm.pass1.value.length==0)
  {
  	document.getElementById("chk_pass1").innerHTML="<br/>Enter Old Password!";
  	c=1;
  }
  
  if(c==1)
  {
  	return false;
  }

 
}

</script>
<body>
 <div id="frm">
 
 <center>
 <form name="myForm" action="newinfo.php" ENCTYPE="multipart/form-data" onSubmit="return chk_frm_s(this)" method="POST">
 <table><br><br><br>
 <tr>
 <td> Username: </td>
 <td><input type="text" id="name1" name="name1" value="<?php echo $_SESSION['username']?>" /><label id="chk_name">*</label></td>
 </tr>
 <td> Old Password: </td>
 <td><input type="password" id="pass1" name="pass1"  /><label id="chk_pass">*</label></td>
 </tr>
 <tr>
 <td> New Password: </td>
 <td><input type="password" id="pass2" name="pass2" /><label id="chk_pass2">*</label></td>
 </tr>
 <tr>
 <td> Confirm New Password: </td>
 <td><input type="password" id="pass2" name="pass3" /><label id="chk_pass2">*</label></td>
 </tr>
 <tr>
<div class="row">
        <div class="col-sm-12 form-group">
          <td><button class="btn btn-success" type="submit" name="post_btn" id="cnt-button" value="Save">UPdATE</button></td>
        </div>
      </div>
 </tr>
 </table>
 </form>
 </center>
</body>

</html>