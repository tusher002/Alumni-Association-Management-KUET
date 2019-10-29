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
<body>

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
	$heading=mysqli_real_escape_string($db,'<d4>Need a </d4>') . '&nbsp ' . mysqli_real_escape_string($db,$_POST['heading']);
	$company=mysqli_real_escape_string($db,'<d4>Company :</d4>') . '&nbsp ' . mysqli_real_escape_string($db,$_POST['company']);
	$post=mysqli_real_escape_string($db,'<d4>Designation :</d4>') . '&nbsp ' . mysqli_real_escape_string($db,$_POST['post']);
	$skill=mysqli_real_escape_string($db,'<d4>Required Skill :</d4>') . '&nbsp ' . mysqli_real_escape_string($db,$_POST['skill']);
	$salary=mysqli_real_escape_string($db,'<d4>Salary :</d4>') . '&nbsp ' . mysqli_real_escape_string($db,$_POST['salary']);
	$cv=mysqli_real_escape_string($db,'<d4>CV :</d4>') . '&nbsp ' . mysqli_real_escape_string($db,$_POST['cv']);
	$email=mysqli_real_escape_string($db,'<d4>email :</d4>') . '&nbsp ' . mysqli_real_escape_string($db,$_POST['email']);
	
		$sql="INSERT INTO carrier(heading,company,post,skill,salary,cv,email) VALUES('$heading','$company','$post','$skill','$salary','$cv','$email')";
		mysqli_query($db,$sql);
		//header("location:event.php");
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
    $stmt = $conn->prepare("SELECT heading,company,post,skill,salary,cv,email,newline,ee FROM carrier"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }

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

<center><b><f20>Need a <d4>JOB</d4> or <d4>EMPLOYEE</d4> ??<br>Then fill the box</f20></b></center>
<br>
<form name="frmRegistration" method="post" action="">
<div class="col-sm-7 slideanim">

<textarea class="form-control" id="comments" name="heading" placeholder="Heading" rows="1" value=""></textarea><br>
<textarea class="form-control" id="comments" name="company" placeholder="Company Name" rows="1" value=""></textarea><br>
<textarea class="form-control" id="comments" name="post" placeholder="Designation" rows="1" value=""></textarea><br>
<textarea class="form-control" id="comments" name="skill" placeholder="Required Skill" rows="1" value=""></textarea><br>
<textarea class="form-control" id="comments" name="salary" placeholder="Salary" rows="1" value=""></textarea><br>
<textarea class="form-control" id="comments" name="cv" placeholder="CV Link" rows="1" value=""></textarea><br>
<textarea class="email" id="comments" name="email" placeholder="Email" rows="1" value=""></textarea><br>
<br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary btn-lg" type="submit" name="post_btn" id="cnt-button" value="Save">SUBMIT</button>
        </div>
      </div>
    </div>
</form>	

</body>
</html>