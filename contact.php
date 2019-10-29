<?php
session_start();
?>

<html>
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
if(isset($_POST['cnt_btn']))
{
	$to = "tusher.mondol2013@gmail.com";
	$name=mysqli_real_escape_string($db,'<d4>Name : </d4>') . '&nbsp ' . mysqli_real_escape_string($db,$_POST['name']);
	$headers=mysqli_real_escape_string($db,'From: ') . '&nbsp ' . mysqli_real_escape_string($db,$_POST['email']).mysqli_real_escape_string($db,'\r\n');
	$sub=mysqli_real_escape_string($db,$_POST['sub']);
	$msg=$name . '<br>' . mysqli_real_escape_string($db,$_POST['msg']);
	
	//echo $headers;
	mail($to,$sub,$msg,$headers, "-femail.address@example.com"); 
	//header("location:contact.php");
}
echo "<center><d5><fs>KUET ALUMNI</fs></d5></center>";
echo '<marquee behavior="scroll" direction="left"><d6><h4><b>Dedicated for our alma-matter</b></h4></d6></marquee><br>';

?>



<!DOCTYPE html>
<head>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
	<link href="div.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
.fa {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}


.fa:hover {
    opacity: 0.7;
}


.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}



.fa-skype {
  background: #00aff0;
  color: white;
}

</style>
</head>
<body>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <br>
  <div class="row">
    <div class="col-sm-5">
      <p><b>Contact us and we'll get back to you within 24 hours.</b></p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Silicon Valley, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +8801521248704</p>
      <p><span class="glyphicon glyphicon-envelope"></span> kuetalumni@gmail.com</p>
	  <br>
	  <a href="https://www.facebook.com/KUET-Alumni-110659982890981/?ref=br_rs" class="fa fa-facebook"></a>  
	  <a href="#" class="fa fa-twitter"></a>
	  <a href="#" class="fa fa-google"></a>
	  <a href="#" class="fa fa-linkedin"></a>
	  <a href="#" class="fa fa-youtube"></a>
	  <a href="#" class="fa fa-skype"></a>
    </div>
	<form name="frmRegistration" method="post" action="">
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
	  <textarea class="form-control" id="comments" name="sub" placeholder="Subject" rows="1"></textarea><br>
      <textarea class="form-control" id="comments" name="msg" placeholder="Comment" rows="7"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary btn-lg" type="submit" name="cnt_btn" id="cnt-button">Send</button>
        </div>
      </div>
    </div>
	</form>
  </div>
</div>


</body>

</html>
