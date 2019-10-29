<?php
session_start();
if(isset($_SESSION['username']))
{
	$name=$_SESSION['username'];
	echo'<br>';
	echo '<center><p><font size="8" color="red">Welcome'.' ' .$name;
	// Create connection
	$db=mysqli_connect("localhost","root","","authentication");

	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	}
	if(isset($_POST['post_btn']))
{
	$q1=mysqli_real_escape_string($db,$_POST['q1']);
	$q2=mysqli_real_escape_string($db,$_POST['q2']);
	$q3=mysqli_real_escape_string($db,$_POST['q3']);
	$sql="UPDATE users set q1='$q1',q2='$q2',q3='$q3' where username='$name'";
	mysqli_query($db,$sql);
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
.center {
    margin: auto;
    width: 100%;

    padding: 30px;
}

</style>
</head>
<body>
<p><font size="6" color="blue">Security Questions</font></p> 
<marquee behavior="scroll" direction="left"><font size="3" color="green">Fill for better security</font></marquee><br>
<div class="center">

 <form name="frmRegistration" method="post" action="">
	<div class="col-sm-7 slideanim">
	<p style="color:blue"><b>In which city you born in ??</b></p>
	<textarea class="form-control" id="comments" name="q1" placeholder="Fill it with Capital Letters" rows="1" value=""></textarea><br>
	<p style="color:blue"><b>What's Your Father's Last Name ??</b></p>
	<textarea class="form-control" id="comments" name="q2" placeholder="Fill it with Capital Letters" rows="1" value=""></textarea><br>
	<p style="color:blue"><b>What's Your Mother's First Name ??</b></p>
	<textarea class="form-control" id="comments" name="q3" placeholder="Fill it with Capital Letters" rows="1" value=""></textarea><br>
    <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary btn-lg" type="submit" name="post_btn" id="cnt-button" value="Save">SUBMIT</button>
        </div>
    </div>
 </div>
</form>	
</div>
</body>
</html>