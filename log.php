<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
?>
<?php
if(isset($_POST['login_btn']))
{
	setcookie("uid",$_POST['username'],time()+60*60*7);
	setcookie("uiid",$_POST['password'],time()+60*60*7);
}
session_start();

if(!isset($_COOKIE['uid']))
{
	$temp="";
	$temp1="";
}
else
{
	$temp=$_COOKIE['uid'] ;
	$temp1=$_COOKIE['uiid'];
}

$db= mysqli_connect("localhost","root","","authentication");
if(isset($_POST['login_btn']))
{

	$username=mysqli_real_escape_string($db,$_POST['username']);
	
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$password=md5($password);
	$sql="select * from users where username='$username' and password='$password'";
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['message']="Logged In";
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		header("location:hme.php");
	}
	else
	{
		$_SESSION['message']="<b>Password/Username incorrect</b>";
	}
	
	
}

?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  

      <link rel="stylesheet" href="css/style.css">
<script>
function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
  }
}

function validate_form(thisform)
{
with (thisform)
  {
  if (validate_required(username,"Username must be filled out!")==false)
  {  user.focus(); return false;}
  else if (validate_required(password,"Password must be filled out!")==false)
  {  pass.focus(); return false;}
  }
}
</script>
  
</head>

<body>
<a href="index.html" class="btn">Cancel</a>
<div class="header">
  <div class="wrapper">
	<div class="container">
	<img src="Logo_KUET.svg" alt="Northern Lights" width="45%" height="40%">
		<h1><p class="thicker">KUET Alumni</p><h1>
		
		<form method="post" action="log.php" onSubmit="return validate_form(this)" method="post" >
			<td><input type="text" name="username" placeholder="Enter Username" class="textInput" value="<?php echo $temp ?>"/></td>
			<td><input type="password" name="password" placeholder="Enter Password" class="textInput" value="<?php echo $temp1 ?>"/></td>
			<button type="submit" name="login_btn" id="login-button">Log In</button><br>
			<p style="font-size:20px"><a href="forget.php">Forgot &nbsp Password ?</a></p>
			
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		
	</ul>
</div>
</div>


	
<?php
if(isset($_SESSION['message'])){
	echo "<center><div style=color:red>".$_SESSION['message']."</div>  </center>";
	unset($_SESSION['message']);
}
?>

</body>
</html>

<?php
}
else{
  header("Location: hme.php");
}
?>