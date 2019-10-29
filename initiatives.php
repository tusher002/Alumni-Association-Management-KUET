<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
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
 </style>
 </head>	
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
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-info">Submit</button>
    </form>
			
			
			
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="hme.php">Home</a>
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
                <a href="event.php" class="btn btn-primary btn-lg">Program & Events</a>
				<br/>
				<br/>
				<br/>
				<br/>
				<a href="carrier.php" class="btn btn-primary btn-lg">Carrier Building</a>
            </div>
        </div>
    </header> 
	
	</body>

</html>