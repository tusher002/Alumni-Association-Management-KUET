<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="external.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">

<title> Profile</title>
<style>
header{
    padding: 1em;
        background-color: gray;
    text-align: center;
	
}

body
{
	font-family: sans-serif;
	font-size: 11pt;
	background-image: url('xx.jpg');
	background-size: cover;
	background-attachment: fixed;
}
table
{width:80%;}
table,tr,td,th
{
	border: 1px solid black;
	border-collapse: collapse;
	opacity: 0.95;
}
th,td
{
	padding:10px;
	text-align:center;
}
th
{
	background-color: #a70000;
	color:white;
}
tr:nth-child(even)
{
	background-color:#e8e8e8;
}
tr:nth-child(odd)
{
	background-color:white;
}
a1
{
	font-size: 400%;
	color: lightpink;
}
h1
{
	font-size: 10;
	color: blue;
}
div.absolute {
    position: absolute;
    left: 20px;

}
</style>
</head>
<body>
	<div id="tfheader">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
		</form>
	</div>
<header>
       <center><a1>KUET ALUMNI</a1><center>
	     <p style="font-color:red;font-size:16px;"><div class="absolute"><a href="hme.php"><b>HOME</b></a></div></p><br>
</header>



<center> <h1>Account Information:</h1> </center>

<form action="profile.php" method="post">
<center>
<table>
<tr>
<th>Name</th>
<th>Batch</th>
<th>University</th>
<th>Company</th>
<th>Address</th>
<th>Email</th>
<th>Contact</th>
</tr>

<?php
$username=$_SESSION['username'];

		echo '<br>';
		echo '<br>';
		$db= mysqli_connect("localhost","root","","authentication");
		$get_pro = "select name from pic where username='$username'";
		$run_pro = mysqli_query($db, $get_pro);
		while($row_pro=mysqli_fetch_array($run_pro)){
			$pro_name = $row_pro['name'];

		echo "<img class='img-responsive img-circle center-block' src='pic/$pro_name' width='400' height='280' />";echo '<br>';}
				echo '<br>';
		echo '<br>';
?>

<?php
//session_start();
$username=$_SESSION['username'];
$query = "SELECT * FROM form where username='$username'";
$connect = mysqli_connect("localhost","root","","authentication");
$filter_Result = mysqli_query($connect,$query) or die($query."<br/><br/>".mysql_error());

?>

<?php while($row = mysqli_fetch_array($filter_Result)):?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['batch'];?></td>
<td><?php echo $row['university'];?></td>
<td><?php echo $row['company'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['mail'];?></td>
<td><?php echo $row['contact'];?></td>
</tr>
<?php endwhile;?>
</table>
</center>
</form>
<br><br><br><br>
<center>
 <form name="frmRegistration" method="post" action="secure.php">
	<div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary btn-lg" type="submit" name="post_btn" id="cnt-button" value="Save">SET SECURITY QUESTIONS</button>
        </div>
    </div>
 </form>
</center> 
</body>
</html>