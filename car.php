<?php
session_start();
?>

<html>
<head>
<style>
img {
    opacity: .2;
}
 </style>
 </head>
<img>
<body background="large1.jpg">
</img>
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
                        <a href="index.html">Home</a>
                    </li>
					<li class="active">
                        <a href="kuet.html">KUET</a>
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

</body>
</html>