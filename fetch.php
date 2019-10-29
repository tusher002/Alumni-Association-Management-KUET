<!DOCTYPE html>
<html>
<head>
<style>

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
</style>
</head>
</html>


<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "authentication");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM form
  WHERE name LIKE '%".$search."%'
  OR address LIKE '%".$search."%' 
  OR university LIKE '%".$search."%' 
  OR batch LIKE '%".$search."%' 
  OR company LIKE '%".$search."%'
  OR mail LIKE '%".$search."%' 
  OR contact LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM form ORDER BY username
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Name</th>
	 <th>Batch</th>
	 <th>University</th>
	 <th>Company</th>
     <th>Address</th>
     <th>Email</th>
     <th>Contact</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name"].'</td>
	<td>'.$row["batch"].'</td>
    <td>'.$row["university"].'</td>
    <td>'.$row["company"].'</td>
	<td>'.$row["address"].'</td>
	<td>'.$row["mail"].'</td>
	<td>'.$row["contact"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>