<?php
session_start();
session_destroy();
unset($_SESSION['username']);
$_SESSION['message']="Logged Out";

if( isset($_COOKIE['uid']) and isset($_COOKIE['uiid'])){
      $nam1=$_COOKIE['uid'];
      $pas1=$_COOKIE['uiid'];
      setcookie('uid','',time()-5000);
      setcookie('uiid','',time()-5000);
      header("location: log.php");
      exit;
  }

?>





<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
	width: 100%;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "authentication";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Username</th><th>Email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td>" . $row["email"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>