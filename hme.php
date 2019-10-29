<?php
session_start();

if(isset($_SESSION['message'])){
	echo "<div id='error_msg'>".$_SESSION['message']."</div>";
	unset($_SESSION['message']);
}
if(!isset($_COOKIE['uid']))
{
	$temp="";
	$temp1="";
	echo '<a target="_blank" href="404_1.gif">
      <img src="404_1.gif" alt="Northern Lights" width="100%" height="100%">';
	exit;
}
else
{
	$temp=$_COOKIE['uid'] ;
	$temp1=$_COOKIE['uiid'];
	
}
?>
	
	
<!DOCTYPE html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet"> 
		<link href="div.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	 color: white;
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

    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
			<form class="navbar-form navbar-left" id="tfnewsearch" method="get" action="http://www.google.com">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-info">Submit</button>
    </form>
			
			
			
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
					
					<li><a><p style="color:lightgreen;"> KUET </p></a>
					 <ul>
						 <li><a href="http://www.kuet.ac.bd">Website</a></li>
						 <li><a href="http://localhost/project/location.php">Location</a></li>
					 </ul>
					</li>
					
                    <li><a> Welcome <?php echo $_SESSION['username'] ?> </a>
					 <ul>
						 <li><a href="profile.php">View Information</a></li>
						 <li><a href="newinfo.php">Change Password</a></li>
					 </ul>
					</li>

                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

	<!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>KUET Alumni</h1>
                <p>Dedicated for our alma-matter</p>
                <a href="update.php" class="btn btn-primary btn-lg">Update Information</a>
				<a href="logout.php" class="btn btn-primary btn-lg">Log Out</a>
            </div>
        </div>
    </header>    

    <!-- Promos -->
	<div class="container-fluid">
        <div class="row promo">
        	<a href="member.php">
				<div class="col-md-4 promo-item item-1">
					<h3>
						Members
					</h3>
				</div>
            </a>
            <a href="initiatives.php">
				<div class="col-md-4 promo-item item-2">
					<h3>
						Initiatives
					</h3>
				</div>
            </a>
			
			<a href="gallery.php">
				<div class="col-md-4 promo-item item-3">
					<h3>
						Photo Gallery
					</h3>
				</div>
            </a>
        </div>
    </div><!-- /.container-fluid -->
    
	<!-- Footer -->
    <footer class="page-footer">
    
    	<!-- Contact Us -->
        <div class="content content-3">
        	<div class="container">
				<h2 class="section-heading">Contact Us</h2>
				<p><span class="glyphicon glyphicon-earphone"></span><br> +8801521248704</p>
				<p><span class="glyphicon glyphicon-envelope"></span><br> kuetalumni@gmail.com</p>

				  <a href="https://www.facebook.com/KUET-Alumni-110659982890981/?ref=br_rs" class="fa fa-facebook"></a>  
				  <a href="#" class="fa fa-twitter"></a>
				  <a href="#" class="fa fa-google"></a>
				  <a href="#" class="fa fa-linkedin"></a>
				  <a href="#" class="fa fa-youtube"></a>
				  <a href="#" class="fa fa-skype"></a>
				  				<br>
												<br>
				<a href="contact.php" class="btn btn-primary btn-lg">Contact Now</a> 
        	</div>
        </div>
        
    </footer>

</body>

</html>


</body>
</html>