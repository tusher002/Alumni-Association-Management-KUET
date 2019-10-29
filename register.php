<?php
session_start();

$db= mysqli_connect("localhost","root","","authentication");
if(isset($_POST['register_btn']))
{

	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$pw=mysqli_real_escape_string($db,$_POST['password']);
	$password2=mysqli_real_escape_string($db,$_POST['password2']);
	
	if($password==$password2)
	{
		$password=md5($password);
		$result = "select * from users where username = '$username'";
		$rs=mysqli_query($db,$result);
		$row = mysqli_fetch_array($rs,MYSQLI_NUM);
if(count($row)>0 )
{
	$_SESSION['message']= "Username Already Exist!!";
	//$_SESSION['username']= $username;
	//$_SESSION['password']= $password;
	header("location: register.php");
}

else
{
		$sql="INSERT INTO users(username,email,password,pw) VALUES('$username','$email','$password','$pw')";
		mysqli_query($db,$sql);
		$_SESSION['message']="Logged In";
		$_SESSION['username']=$username;
		header("location:log.php");
}
		
	}
	else
	{
		$_SESSION['message']="Passwords didn't match";
	}
}

?>
<html>
<head>
<link href="div.css" rel="stylesheet">
<title>PHP User Registration Form</title>
<script type="text/javascript">
function chk_frm_s(frm)
{
  var c=0;
   
   document.getElementById("chk_user").innerHTML="";
  if (frm.username.value.length==0)
  {
  	document.getElementById("chk_user").innerHTML="Select Username!";
  	c=1;
  }
   
   
   document.getElementById("chk_pass").innerHTML="";
  if (frm.password.value.length==0)
  {
  	document.getElementById("chk_pass").innerHTML="<br/>Enter Password!";
  	c=1;
  }

  
  //  check for valid numeric strings
  
  if(c==1)
  {
  	return false;
  }

 
}

</script>
<style>
body{
	width:100%;
	height:100%;
	font-family:Arial Black;
	background: #A6E7FF;
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
label
{
	color:red;
}
</style>
</head>
<body>
<p><center><d5>Username Already Exist</d5></center></p>
<p><center><fs><d4>KUET Alumni</d4></fs></center></p>
<p><center><d6>Not registered yet??!!!!!Register Now.</d6></center></p>

 <div id="frm">

<form name="frmRegistration" method="post" ENCTYPE="multipart/form-data" onSubmit="return chk_frm_s(this)" action="">
<table border="0" width="500" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td>User Name</td>
<td><input type="text" class="demoInputBox" name="username" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"><label id="chk_user">*</label></td></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="email" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="password" placeholder="3 to 8 characters" pattern=".{3,8}" title="3 to 8 characters"><label id="chk_pass">*</label></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" class="demoInputBox" name="password2" value=""></td>
</tr>

<td colspan=2>
<input type="checkbox" name="terms"> <d5>I accept Terms and Conditions </d5><br/><br/><input type="submit" name="register_btn" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>
</body></html>