

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
<p style="font-size:20px"><a href="log.php">&nbsp&nbsp&nbspLog In</a></p>
<br>
<center><p><font size="6" color="blue">Security Questions</font></p> 
<marquee behavior="scroll" direction="left"><font size="3" color="green">Fill for better security</font></marquee><br>
<div class="center">

 <form name="frmRegistration" method="post" action="">
	<div class="col-sm-7 slideanim">
	<td><p style="color:blue"><b>Username</b></p><td>
	<textarea class="form-control" id="comments" name="username" placeholder="Username" rows="1" value=""></textarea><br>
	<p style="color:blue"><b>In which city you born in ??</b></p>
	<textarea class="form-control" id="comments" name="a1" placeholder="Fill it with Capital Letters" rows="1" value=""></textarea><br>
	<p style="color:blue"><b>What's Your Father's Last Name ??</b></p>
	<textarea class="form-control" id="comments" name="a2" placeholder="Fill it with Capital Letters" rows="1" value=""></textarea><br>
	<p style="color:blue"><b>What's Your Mother's First Name ??</b></p>
	<textarea class="form-control" id="comments" name="a3" placeholder="Fill it with Capital Letters" rows="1" value=""></textarea><br>
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

<?php
	if(isset($_POST['post_btn']))
{
		$db=mysqli_connect("localhost","root","","authentication");

	if (!$db) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$name=mysqli_real_escape_string($db,$_POST['username']);
	$a1=mysqli_real_escape_string($db,$_POST['a1']);
	$a2=mysqli_real_escape_string($db,$_POST['a2']);
	$a3=mysqli_real_escape_string($db,$_POST['a3']);
	$sql="select 	q1 from users where username='$name'";
	$q1=mysqli_query($db,$sql);
	$qa1 =mysqli_fetch_array($q1);
	$sql2="select 	q2 from users where username='$name'";
	$q2=mysqli_query($db,$sql2);
	$qa2 =mysqli_fetch_array($q2);
	$sql3="select 	q3 from users where username='$name'";
	$q3=mysqli_query($db,$sql3);
	$qa3 =mysqli_fetch_array($q3);
	$sql4="select 	pw from users where username='$name'";
	$pw1=mysqli_query($db,$sql4);
	$pw =mysqli_fetch_array($pw1);

	if($a1==$qa1['q1'] && $a2==$qa2['q2'] && $a3==$qa3['q3'])
	{
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo '&nbsp&nbsp&nbsp&nbsp<font size="5" face="verdana" color="red">Your Password is : '.$pw['pw'];

	}
}

?>